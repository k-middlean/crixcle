<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BrandingController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('branding/home.html.twig');
    }

    public function portfolio(): Response
    {
        return $this->render('branding/portfolio.html.twig');
    }

    public function services(): Response
    {
        return $this->render('branding/services.html.twig');
    }

    public function contactUs(): Response
    {
        return $this->render('branding/contact-us.html.twig');
    }

    public function catchAll(): Response
    {
        return $this->render('branding/work-in-progress.html.twig');
    }
}