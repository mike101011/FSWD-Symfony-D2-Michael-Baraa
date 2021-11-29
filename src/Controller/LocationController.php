<?php

namespace App\Controller;

use App\Entity\Location;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    #[Route('/Addlocation', name: 'Addlocation')]
    public function addAction()

    {



        // you can fetch the EntityManager via $this->getDoctrine()

        // or you can add an argument to your action: createAction(EntityManagerInterface $em)

        $em = $this->getDoctrine()->getManager();

        $Location = new Location(); // here we will create an object from our class Product.

        $Location->setLName('New Location'); // in our Location class we have a set function for each column in our db

        $Location->setPrice(3000);
        $Location->setDescription('Lorem ipsum loc.');


        // tells Doctrine you want to (eventually) save the Location (no queries yet)

        $em->persist($Location);

        // actually executes the queries (i.e. the INSERT query)

        $em->flush();

        return new Response('Saved new location with id ' . $Location->getId());
    }
    #[Route('/standard2', name: 'standard2')]
    public function showAll()
    {
        $locations = $this->getDoctrine()->getRepository(Location::class)->findAll();
        return $this->render('location/index.html.twig', array("locations" => $locations));
    }
}
