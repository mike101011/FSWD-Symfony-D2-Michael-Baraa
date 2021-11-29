<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    #[Route('/standard', name: 'standard')]
    public function index(): Response
    {
        return $this->render('standard/index.html.twig', [
            'controller_name' => 'StandardController',
        ]);
    }
    #[Route('/about', name: 'about')]
    public function aboutFunct()
    {
        return $this->render('standard/about.html.twig', []);
    }
    #[Route('/news', name: 'news')]
    public function newsFunct()
    {
        return $this->render('standard/news.html.twig', []);
    }
    #[Route('/contact', name: 'contact')]
    public function contactFunct()
    {
        return $this->render('standard/contact.html.twig', []);
    }
}
