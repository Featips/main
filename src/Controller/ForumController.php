<?php

namespace App\Controller;

use App\Entity\ForumCategory;
use App\Entity\ForumTopic;
use App\Entity\ForumPost;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Doctrine\RelationManyToMany;
use Symfony\Component\BrowserKit\Request;

class ForumController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/forum', name: 'forum')]
    public function index() : Response
    {
        $categories = $this->entityManager->getRepository(ForumCategory::class)->findAll();
        return $this->render('forum/index.html.twig', [
            'categories' => $categories,
        ]);





    }
    #[Route('/forum/{slug}', name: 'category')]
    public function show($slug) : Response
    {
        $category = $this->entityManager->getRepository(ForumCategory::class)->findOneBySlug($slug);
        if (!$category) {
            return $this->redirectToRoute('forum');
        } else {
            $categoryid = $category->getId();
            //dd($categoryid);
            $topics = $this->entityManager->getRepository(ForumTopic::class)->findBy(['category' => $categoryid]);
            return $this->render('forum/category.html.twig', [
                'category' => $category,
                'topics' => $topics,
            ]);
        
        // $topics = $this->entityManager->getRepository(ForumTopic::class)->findAll();
        // return $this->render('forum/category.html.twig', [
        //     'topics' => $topics,
        // ]);

        }
    }   

    #[Route('/forum/{category}/{slug}', name: 'topic')]
    public function topic($category, $slug, Request $request, EntityManagerInterface $entityManager ) : Response
    {
        $topic = $this->entityManager->getRepository(ForumTopic::class)->findOneBySlug($slug);
        
        if (!$topic) {
            return $this->redirectToRoute('forum');
        } else {

            $form = $this->createForm(PostType::class);
            $form->handleRequest($request);
            //add

            $posts = $this->entityManager->getRepository(ForumPost::class)->findOneBySlug($slug);
            //dd($posts);
            return $this->render('forum/topic.html.twig', [
                'topic' => $topic, 'posts' => $posts,
                'Postform' => $form->createView()
            ]);


        }
    }
    #[Route('/forum/{category}/{topic}}/{id}', name: 'post')]
    public function post($id, Request $request) : Response
    {
        
        $form = $this->createForm(PostType::class);
        $form->handleRequest($request);

        $post = $this->entityManager->getRepository(ForumPost::class)->findOneBy($id);
        if (!$post) {
            return $this->redirectToRoute('forum');
        } else {

            return $this->render('forum/post.html.twig', [
                'Postform' => $form->createView(),
                'post' => $post,

            ]);
        }
    }



}

