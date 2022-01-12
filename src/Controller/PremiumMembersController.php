<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PremiumMembersController extends AbstractController
{
    #[Route('/premium/members', name: 'premium_members')]
    public function index(): Response
    {
        return $this->render('premium_members/index.html.twig', [
            'controller_name' => 'PremiumMembersController',
        ]);
    }
}
