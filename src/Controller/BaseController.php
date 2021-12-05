<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Video;

class BaseController extends AbstractController
{
    public function getNavData() : Response
    {
        $user = $this->getUser();
        $subscription = [];
        $is_admin = false;

        if($user){
            $subscribe = $user->getUsers();
            $is_admin = in_array("ROLE_ADMIN",$user->getRoles() );
    
            foreach ($subscribe as $key => $value) {
                array_push($subscription,$value->getVideos()->getOwner());
            }
        }
        return $this->render('naviguation/naviguation.html.twig', [
            'user' => $user,
            'subscription'=>$subscription,
            'is_admin' => $is_admin
        ]);
    }
    public function getSearch() : Response
    {
        $user = $this->getUser();
        return $this->render('naviguation/search.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/search/{param}', name: 'search_idea')]
    public function searchIdea(string $param) : Response
    {
        $em = $this->getDoctrine()->getManager();

        $result = [
            "users"=>[],
            "videos"=>[],
        ];

        $result["users"] += $em->getRepository(User::class)->searchUser($param);
        $result["videos"] += $em->getRepository(Video::class)->searchVideo($param);

        $array_result = [
            "users"=>[],
            "videos"=>[],
        ];

        foreach($result["users"] as $key => $value){
            array_push($array_result["users"] , [
                'id' => $value->getId(),
                'pseudo' => $value->getPseudo(),
                'picture' => $value->getProfilePicture()
            ]);
        }
        foreach($result["videos"] as $key => $value){
            array_push($array_result["videos"], [
                'name' => $value->getName(),
                'uuid' => $value->getUuid(),
            ]);
        }
        

        return $this->json($array_result);          

    }
}
