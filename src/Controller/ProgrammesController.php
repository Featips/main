<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Program;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProgrammesController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/programmes', name: 'programmes')]
    public function index(): Response
    {
        $programmes = $this->entityManager->getRepository(Program::class)->findAll();


        return $this->render('programmes/index.html.twig', [
            'programmes' => $programmes,
        ]);
    }
}
