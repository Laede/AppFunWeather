<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="features")
     */
    public function firstPage()
    {
        return $this->render('features/index.html.twig');
    }

    /**
     * @Route("/reviews", name="reviews")
     */
    public function secondPage()
    {
        return $this->render('reviews/index.html.twig');
    }
}