<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsForumController extends AbstractController
{
    #[Route('/details/forum', name: 'details_forum')]
    public function index(): Response
    {
        return $this->render('details_forum/index.html.twig', [
            'controller_name' => 'DetailsForumController',
        ]);
    }
}
