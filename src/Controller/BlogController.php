<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home():Response
    {
        return $this->render('blog/home.html.twig');
    }
    /**
     * @Route("/blog/12", name="blog_show")
     */
    public function show():Response
    {
        return $this->render('blog/show.html.twig');
    }
    /**
     * @Route("/blog/new", name="blog_newarticle")
     */
    public function new():Response
    {
        return $this->render('blog/newarticle.html.twig');
    
    }
}
