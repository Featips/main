<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Category;

class ArticlesController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/articles', name: 'articles')]
    public function index(): Response
    {
        $articles = $this->entityManager->getRepository(Article::class)->findAll();
        $catarticles = $this->entityManager->getRepository(Category::class)->findAll();
        return $this->render('articles/index.html.twig', [
            'articles' => $articles, 'catarticles' => $catarticles,
        ]);
    }
}
