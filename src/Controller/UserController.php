<?php

namespace App\Controller;

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

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('pseudo' => $param));

        $now =new DateTime('now');

        $videos = $user->getVideos();

        foreach ($videos as $key => $value) {
            $date_interval[$value->getId()] = $value->getPublicationDate()->diff($now);
        }

        $subscription = [];
        $user_connected = $this->getUser();

        $subscribed = $user_connected->getUsers();
        foreach ($subscribed as $key => $value) {
            array_push($subscription,$value->getId());
        }

        $is_subscibed = in_array($user->getId(),$subscription);


        if($user->getId() == $this->getUser()->getId()){
            $is_user = true;
        }

        return $this->render('user/index.html.twig', [
            'is_user' => $is_user,
            'is_subscibed' => $is_subscibed,
            'user' => $user,
            'date_interval'=>$date_interval
        ]);
    }

    #[Route('/subscribe/{param}', name: 'subscribe')]
    public function subscribe(int $param): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $param));

        $user_connected = $this->getUser();

        $query = $user->addIdUser($user_connected);

        $entityManager->persist($query);
        $entityManager->flush();

        return $this->redirect('/user/'.$user->getPseudo());
    }

    #[Route('/unsubscribe/{param}', name: 'unsubscribe')]
    public function unsubscribe(int $param): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $param));

        $user_connected = $this->getUser();

        $query = $user->removeIdUser($user_connected);

        $entityManager->persist($query);
        $entityManager->flush();

        return $this->redirect('/user/'.$user->getPseudo());
    }
}
