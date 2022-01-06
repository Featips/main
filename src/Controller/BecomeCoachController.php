<?php

namespace App\Controller;
use App\Form\BecomeCoachType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BecomeCoachController extends AbstractController
{
    #[Route('/become/coach', name: 'become_coach')]
    public function index(): Response
    {
        $form = $this->createForm(BecomeCoachType::class);
        $form->handleRequest($request);
        
        return $this->render('become_coach/index.html.twig', [
            'BecomeCoach' => $form->createView(),
        ]);
    }
}
