<?php

namespace App\Controller;

use App\Entity\HasWatched;
use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/{param}', name: 'user')]
    public function viewProfile(string $param): Response
    {
        $is_user = false;
        $is_subscibed =  false;
        $date_interval = [];
        $views = [];
        $stats = [
            "videos"=>0,
            "views"=>0
        ];

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('pseudo' => $param));

        $now =new DateTime('now');

        $videos = $user->getVideos();

        foreach ($videos as $key => $value) {
            $dateInter = $value->getPublicationDate()->diff($now)->format('%m') == "0" ? $value->getPublicationDate()->diff($now)->format('%d days') : $value->getPublicationDate()->diff($now)->format('%m months %d days');
            $date_interval[$value->getId()] = $dateInter;
            $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $value->getId()));
            $views[$value->getId()] = count($hasBeenView);
            $stats["videos"] += 1;
            $stats["views"] += count($value->getHasWatcheds());
        }

        $subscription = [];
        $user_connected = $this->getUser();

        if ($user_connected != null){

            $subscribed = $user_connected->getUsers();
            foreach ($subscribed as $key => $value) {
                array_push($subscription,$value->getId());
            }       

            if($user->getId() == $this->getUser()->getId()){
                $is_user = true;
            }
            $is_subscibed = in_array($user->getId(),$subscription);

        }

        return $this->render('user/index.html.twig', [
            'is_user' => $is_user,
            'is_subscibed' => $is_subscibed,
            'user' => $user,
            'views' => $views,
            'stats' => $stats,
            'date_interval'=>$date_interval
        ]);
    }

    #[Route('/subscribe/{param}/{location}', name: 'subscribe')]
    public function subscribe(int $param, string $location): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $param));

        $user_connected = $this->getUser();

        if ($user_connected != null) {

            $query = $user->addIdUser($user_connected);
    
            $entityManager->persist($query);
            $entityManager->flush();
        }
        
        return $location == "user" ? $this->redirect('/user/'.$user->getPseudo()) : $this->redirect('/video/'.$location);

    }

    #[Route('/unsubscribe/{param}/{location}', name: 'unsubscribe')]
    public function unsubscribe(int $param, string $location): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $param));

        $user_connected = $this->getUser();

        $query = $user->removeIdUser($user_connected);

        $entityManager->persist($query);
        $entityManager->flush();

        return $location == "user" ? $this->redirect('/user/'.$user->getPseudo()) : $this->redirect('/video/'.$location);
    }
}
