<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends AbstractController
{
    /**
     * @Route("/sf", name="clients")
     */
    public function index()
    {
        return $this->render('clients.html.twig');
    }
}

