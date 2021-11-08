<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Video;
use App\Form\VideoFormType;
use App\Service\RandomString;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    #[Route('/video/upload', name:'upload_video')]
    public function uploadVideo(Request $request): Response
    {

        $entityManager = $this->getDoctrine()->getManager();

        $video = new Video();
        $randomString = new RandomString();

        $form = $this->createForm(VideoFormType::class, $video);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $video->setIdUser($this->getUser());
            $video->setViews(0);
            $video->setThumbnail('not yet');
            $video->setUuid($randomString->randomPassword(8));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($video);
            $entityManager->flush();
        }
        

        return $this->renderForm('video/upload.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/subscription', name: 'subscription')]
    public function subscription(): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $subscription = $user->getUsers();
        $videos = [];

        foreach ($subscription as $key => $value) {
            array_push($videos,$value->getVideos());
        }
        // dd($videos);

        return $this->render('video/subscription.html.twig', [
            'user' => $user,
            'videos'=> $videos
        ]);
    }

    #[Route('/video/{param}', name: 'watch_video')]
    public function getVideo(string $param): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $video = $entityManager->getRepository(Video::class)->findOneBy(array('uuid' => $param));

        $user = $video->getIdUser();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $user));
        $comments = $video->getComments();

        return $this->render('video/show_video.html.twig', [
            'video' => $video,
        ]);
    }
}
