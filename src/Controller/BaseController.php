<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function getNavData()
    {
        $user = $this->getUser();
        $subscription = [];

        if($user){
            $subscribe = $user->getUsers();
    
            foreach ($subscribe as $key => $value) {
                array_push($subscription,$value->getVideos()->getOwner());
            }
        }

        


        return $this->render('naviguation/naviguation.html.twig', [
            'user' => $user,
            'subscription'=>$subscription,
        ]);
    }
}
