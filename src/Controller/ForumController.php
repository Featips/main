<?php

namespace App\Controller;

use App\Entity\ForumCategory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ForumController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager=$entityManager;
    }

    #[Route('/forum', name: 'forum')]
    public function index(): Response
    {
        $categories = $this->entityManager->getRepository(ForumCategory::class)->findAll();
        return $this->render('forum/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    #[Route('/forum/{$slug}', name: 'category')]
    public function show($slug): Response
    {
        $category = $this->entityManager->getRepository(ForumCategory::class)->findOneBySlug($slug);
        if(!$category)
        {
            return $this->redirectToRoute('forum');
        }
        else{

        
        return $this->render('forum/index.html.twig', [
            'category' => $category,
        ]);
    }



}
}
