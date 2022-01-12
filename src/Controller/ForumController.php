<?php

namespace App\Controller;

use App\Entity\ForumCategory;
use App\Entity\ForumTopic;
use App\Entity\ForumPost;
use App\Form\PostType;
use App\Form\TopicType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


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
    public function show($slug, Request $request, EntityManagerInterface $entityManager) : Response
    {
        $category = $this->entityManager->getRepository(ForumCategory::class)->findOneBySlug($slug);
        if (!$category) {
            return $this->redirectToRoute('forum');
        } else {
            $user=$this->getUser();
            $categoryid = $category->getId();
            
            $topic = new ForumTopic();
            
            $form = $this->createForm(TopicType::class);
            $form->handleRequest($request);
            // dd($topic);

            if ($form->isSubmitted() && $form->isValid() ) {
                
                $title = $form->get('title')->getData();
                $content = $form->get('content')->getData();
                $topic->setContent($content);
                $topic->setTitle($title);
                //$topic->setUser($user);
                $topic->setCategory($category);
                $topic->setSlug($title);
                $entityManager->persist($topic);
                $this->entityManager->flush();
            }
            
            
            
            $topics = $this->entityManager->getRepository(ForumTopic::class)->findBy(['category' => $categoryid]);
            return $this->render('forum/category.html.twig', [
                'category' => $category,
                'topics' => $topics,
                'Topicform' => $form->createView(),
            
            
            
            
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
            $user=$this->getUser();
            
            $post = new ForumPost();
            
            $form = $this->createForm(PostType::class);
            $form->handleRequest($request);
            //add
            if ($form->isSubmitted() && $form->isValid() ) {
               
                $content = $form->get('content')->getData();
                $post->setContent($content);
                $post->setUser($user);
                $post->setTopic($topic);
                // dd($post);
                $entityManager->persist($post);
                $this->entityManager->flush();
            }
            $posts = $this->entityManager->getRepository(ForumPost::class)->findBy(['topic' => $topic->getId()]);
            
            
            // dd($posts);
            return $this->render('forum/topic.html.twig', [
                'topic' => $topic, 'posts' => $posts,
                'Postform' => $form->createView(),

            ]);

            
        }
    }
    
    // #[Route('/forum/{category}/{topic}/{id}', name: 'post')]
    // public function post($id, Request $request) : Response
    // {
        
    //     // $form = $this->createForm(PostType::class);
    //     // $form->handleRequest($request);

    //     $post = $this->entityManager->getRepository(ForumPost::class)->findOneBy($id);
    //     if (!$post) {
    //         return $this->redirectToRoute('forum');
    //     } else {

    //         return $this->render('forum/post.html.twig', [
    //             // 'Postform' => $form->createView(),
    //             'post' => $post,

    //         ]);
    //     }
    // }



}

