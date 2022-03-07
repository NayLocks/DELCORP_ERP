<?php

namespace App\Controller;

use App\Entity\Customers;
use App\Entity\CustomersAddress;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends AbstractController
{
    /**
     * @Route("/Tiers/Clients/Clients_Liste", name="clients")
     */
    public function clients(Request $request)
    {
        $allClients = $this->getDoctrine()->getRepository(Customers::class);
        $clients = $allClients->findAll();

        return $this->render('Tiers/Clients/clients.html.twig', ['clients' => $clients]);
    }

    /**
     * @Route("/Tiers/Clients/Client/{customerCode}", name="client_details")
     */
    public function client_details(Request $request, $customerCode)
    {
        $allClients = $this->getDoctrine()->getRepository(Customers::class);
        $client = $allClients->findOneBy(array('customerCode' => $customerCode ));

        return $this->render('Tiers/Clients/client.html.twig', ['client' => $client]);
    }
}

