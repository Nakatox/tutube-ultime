<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\HasWatched;
use App\Entity\User;
use App\Entity\Video;
use App\Form\RegistrationFormType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/video', name: 'admin_video')]
    public function adminVideos(): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){
            $videos = [];
            $views = [];

            $entityManager = $this->getDoctrine()->getManager();

            $videos = $entityManager->getRepository(Video::class)->getAll("");

            foreach ($videos as $key => $value) {
                $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $value->getId()));
                $views[$value->getId()] = count($hasBeenView);
            }

            return $this->render('admin/video.html.twig', [
                'videos' => $videos,
                'views' => $views
            ]);
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/admin/video/{param}', name: 'admin_video_show')]
    public function adminGetVideo(string $param): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){

            $entityManager = $this->getDoctrine()->getManager();
            
            $video = $entityManager->getRepository(Video::class)->findOneBy(array('uuid' => $param));

            $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $video->getId()));
            $views = count($hasBeenView);
        
            $user = $video->getIdUser();
            $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $user));

            return $this->render('admin/show_video.html.twig', [
                'video' => $video,
                'views' => $views,
                'author' => $user,
            ]);
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/admin/user', name: 'admin_user')]
    public function adminUsers(): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){

            $entityManager = $this->getDoctrine()->getManager();
            $users = $entityManager->getRepository(User::class)->findAll();

            return $this->render('admin/users.html.twig', [
                'users' => $users,
            ]);
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/admin/user/edit/{param}', name: 'admin_edit_user')]
    public function adminEditUser(string $param, Request $request, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findOneBy(array('id' => $param));

            $form = $this->createForm(RegistrationFormType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $user->setFirstName($form->get('firstname')->getNormData());
                $user->setLastName($form->get('lastname')->getNormData());
                $user->setPseudo($form->get('pseudo')->getNormData());
                $user->setEmail($form->get('email')->getNormData());

                $image = $form->get('profile_picture')->getData();

                if ($image != "base_profile_pic.png"){
                    $image->move($this->getParameter('upload_profile_picture'), $image->getFilename().".png");
        
                    $user->setProfilePicture($image->getFilename().".png");
                }

                $user->setPassword(
                $userPasswordHasherInterface->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );

                if($form->get('roles')->getData() == true){
                    $user->setRoles(['ROLE_ADMIN']);
                }

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->flush();

                return $this->redirectToRoute('app_login');
            }

            return $this->render('admin/edit_user.html.twig', [
                'form' => $form->createView(),
            ]);
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/admin/user/delete/{param}', name: 'admin_delete_user')]
    public function adminDeleteUser(string $param): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){

            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findOneBy(array('id'=>$param));
            $entityManager->remove($user);
            $entityManager->flush();

            return $this->redirect('/admin/user');
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/admin/{param}/video', name: 'admin_video_user')]
    public function adminVideosByUser(string $param): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){
            $videos = [];
            $views = [];
            $date_interval = [];

            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findOneBy(array('pseudo' => $param));

            $now =new DateTime('now');

            $videos = $user->getVideos();

            foreach ($videos as $key => $value) {
                $dateInter = $value->getPublicationDate()->diff($now)->format('%m') == "0" ? $value->getPublicationDate()->diff($now)->format('%d days') : $value->getPublicationDate()->diff($now)->format('%m months %d days');
                $date_interval[$value->getId()] = $dateInter;
                $hasBeenView = $entityManager->getRepository(HasWatched::class)->findBy(array('id_video'=> $value->getId()));
                $views[$value->getId()] = count($hasBeenView);
            }

            return $this->render('admin/video_user.html.twig', [
                'videos' => $videos,
                'views' => $views,
                'date_interval'=>$date_interval
            ]);
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/admin/comment/delete/{param}/{uuid}', name: 'admin_delete_comment')]
    public function adminDeleteComment(int $param, string $uuid): Response
    {
        $user = $this->getUser();
        if($user && in_array("ROLE_ADMIN",$user->getRoles())){

            $entityManager = $this->getDoctrine()->getManager();
            $comment = $entityManager->getRepository(Comment::class)->findOneBy(array('id' => $param));
            
            $entityManager->remove($comment);
            $entityManager->flush();

            return $this->redirect('/admin/video/'.$uuid);
        }else{
            return $this->redirect('/home');
        }
    }

    #[Route('/', name: 'undefined')]
    public function undefined(): Response
    {
        return $this->redirect('/home');   
    }
}
