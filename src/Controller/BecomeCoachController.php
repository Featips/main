<?php

namespace App\Controller;
use App\Form\BecomeCoachType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class BecomeCoachController extends AbstractController
{
    #[Route('/become_coach', name: 'become_coach')]
    public function index(Request $request,  EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BecomeCoachType::class);
        $form->handleRequest($request);
        
        return $this->render('become_coach/index.html.twig', [
            'BecomeCoach' => $form->createView(),
        ]);
    }
}
