<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Video;
use App\Form\CommentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/create/{param}', name: 'create_comment')]
    public function addComment(int $param, RequestStack $requestStack): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $video = $entityManager->getRepository(Video::class)->findOneBy(array('id' => $param));

        $comment =  new Comment();
        $form = $this->createForm(CommentFormType::class, $comment);
        
        $form->handleRequest($requestStack->getMainRequest());

        if($form->isSubmitted() && $form->isValid()){
            if($this->getUser() != null){

                $comment->setIdUser($this->getUser());
                $comment->setIdVideo($video);

                $entityManager->persist($comment);
                $entityManager->flush();
            }
            return $this->renderForm('comment/index.html.twig', [
                'comment_form' => $form
            ]);
        }
        return $this->renderForm('comment/index.html.twig', [
            'comment_form' => $form
        ]);
    }
}
