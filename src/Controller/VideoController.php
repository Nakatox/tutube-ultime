<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\HasWatched;
use App\Entity\User;
use App\Entity\Video;
use App\Form\VideoFormType;
use App\Form\CommentFormType;
use App\Service\RandomString;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VideoRepository;
use App\EventSubscriber\RandomIpSubscriber;

class VideoController extends AbstractController
{
    #[Route('/video/upload', name:'upload_video')]
    public function uploadVideo(Request $request): Response
    {
        if($this->getUser() != null){

            $entityManager = $this->getDoctrine()->getManager();

            $video = new Video();
            $randomString = new RandomString();

            $form = $this->createForm(VideoFormType::class, $video);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){

                $link = $form["link"]->getData();
                preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches);
                $video->setLink("https://www.youtube.com/embed/".$matches[0]);

                $video->setIdUser($this->getUser());
                $video->setThumbnail('not yet');
                $video->setUuid($randomString->randomPassword(8));

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($video);
                $entityManager->flush();

                return $this->redirect('/user/'.$this->getUser()->getPseudo());
            }

            $user = $this->getUser();

            return $this->renderForm('video/upload.html.twig', [
                'form' => $form,
                'user' => $user
            ]);
        }
    }

    #[Route('/subscription', name: 'subscription')]
    public function subscription(): Response
    {
        if($this->getUser() != null){
            $date_interval = [];
            $videos = [];
            $views = [];

            $entityManager = $this->getDoctrine()->getManager();

            $user = $this->getUser();
            $now =new DateTime('now');

            $subs = $user->getUsers();

            foreach ($subs as $key => $value) {
                foreach ($value->getVideos() as $key => $value) {
                    array_push($videos, $value);
                }
            }

            foreach ($videos as $key => $value) {
                $dateInter = $value->getPublicationDate()->diff($now)->format('%m') == "0" ? $value->getPublicationDate()->diff($now)->format('%d days') : $value->getPublicationDate()->diff($now)->format('%m months %d days');
                $date_interval[$value->getId()] = $dateInter;
                $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $value->getId()));
                $views[$value->getId()] = count($hasBeenView);
            }

            return $this->render('video/subscription.html.twig', [
                'user' => $user,
                'views' => $views,
                'date_interval'=>$date_interval
            ]);
        }else{
            return $this->redirect('/trend');
        }
    }

    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        $date_interval = [];
        $videos = [];
        $views = [];

        $entityManager = $this->getDoctrine()->getManager();

        $videos = $entityManager->getRepository(Video::class)->getAll("yes");

        $now =new DateTime('now');

        foreach ($videos as $key => $value) {
            $dateInter = $value->getPublicationDate()->diff($now)->format('%m') == "0" ? $value->getPublicationDate()->diff($now)->format('%d days') : $value->getPublicationDate()->diff($now)->format('%m months %d days');
            $date_interval[$value->getId()] = $dateInter;
            $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $value->getId()));
            $views[$value->getId()] = count($hasBeenView);
        }

        return $this->render('video/home.html.twig', [
            'videos' => $videos,
            'date_interval'=>$date_interval,
            'views' => $views
        ]);
    }

    #[Route('/trend', name: 'trend')]
    public function trend(): Response
    {
        $date_interval = [];
        $videos = [];
        $videos_by_views = [];

        $entityManager = $this->getDoctrine()->getManager();

        $videos = $entityManager->getRepository(Video::class)->getTrend();

        foreach ($videos as $key => $value) {
            array_push($videos_by_views, [$value,"views" => count($value->getHasWatcheds())]);
        }
        $views = array_column($videos_by_views, 'views');
        array_multisort($views, SORT_DESC, $videos_by_views);

        $now =new DateTime('now');

        foreach ($videos as $key => $value) {
            $dateInter = $value->getPublicationDate()->diff($now)->format('%m') == "0" ? $value->getPublicationDate()->diff($now)->format('%d days') : $value->getPublicationDate()->diff($now)->format('%m months %d days');
            $date_interval[$value->getId()] = $dateInter;
        }

        return $this->render('video/tendance.html.twig', [
            'videos' => $videos_by_views,
            'date_interval'=>$date_interval
        ]);
    }

    #[Route('/discover', name: 'discover')]
    public function discover(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $video = [];

        $videos = $entityManager->getRepository(Video::class)->getDiscover();
        foreach ($videos as $key => $value) {
            if (count($value->getHasWatcheds())<= 100){
                array_push($video, $value);
            }
        }

        return $this->redirect('/video/'.$video[random_int(0, count($video)-1)]->getUuid());
    }

    #[Route('/video/{param}', name: 'watch_video')]
    public function getVideo(string $param, Request $request): Response
    {
        $is_subscribed = false;
        $id_viewed = [];

        $entityManager = $this->getDoctrine()->getManager();
        
        $video = $entityManager->getRepository(Video::class)->findOneBy(array('uuid' => $param));

        $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $video->getId()));
        $views = count($hasBeenView);
        foreach ($hasBeenView as $key => $value) {
            array_push($id_viewed, $value->getIpUser());
        }
        
        $randomIp = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
        $userIp = $_SERVER['REMOTE_ADDR'];

        if(!in_array($randomIp, $id_viewed)){
            $HasWatched = new HasWatched();
            $HasWatched->setIdVideo($video);
            $HasWatched->setIpUser($randomIp);
            $entityManager->persist($HasWatched);
            $entityManager->flush();
        }

        $user = $video->getIdUser();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $user));
        
        $subscription = [];
        $user_connected = $this->getUser();

        if ($user_connected != null){
            
            $subscribed = $user_connected->getUsers();
            foreach ($subscribed as $key => $value) {
                array_push($subscription,$value->getId());
            }
            $is_subscribed = in_array($user->getId(),$subscription);
        }

        return $this->render('video/show_video.html.twig', [
            'video' => $video,
            'views' => $views,
            'author' => $user,
            'is_subscribed' => $is_subscribed,
        ]);
    }

    #[Route('/video/delete/{param}/{location}', name: 'delete_video')]
    public function deleteVideo(int $param, string $location): Response
    {
        if($this->getUser() != null){

            $entityManager = $this->getDoctrine()->getManager();
            
            $video = $entityManager->getRepository(Video::class)->findOneBy(array('id' => $param));
            $user = $video->getIdUser()->getPseudo();

            if($video->getIdUser()->getId() == $this->getUser()->getId() or in_array("ROLE_ADMIN",$this->getUser()->getRoles())){
                $entityManager->remove($video);
                $entityManager->flush();
            }

            if ($location == 'user'){
                return $this->redirect('/user/'.$user);
            }else if ($location == 'admin_video'){
                return $this->redirect('/admin/video');
            }else if ($location == 'admin_user_video'){
                return $this->redirect("/admin/{$user}/video");
            }

        }
    }
}
