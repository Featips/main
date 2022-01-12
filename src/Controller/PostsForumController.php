<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsForumController extends AbstractController
{
    #[Route('/posts/forum', name: 'posts_forum')]
    public function index(): Response
    {
        return $this->render('posts_forum/index.html.twig', [
            'controller_name' => 'PostsForumController',
        ]);
    }
}
