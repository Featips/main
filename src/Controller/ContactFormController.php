<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Form\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactFormController extends AbstractController
{
    #[Route('/contact/form', name: 'contact_form')]
    public function index(Request $request,  EntityManagerInterface $entityManager): Response
    {   
        
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        return $this->render('contact_form/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
