<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;

class OneController extends Controller
{
    /**
     * @Route("/data", name="homepage2")
     */
    
    public function createAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setname('nirav');
        $user->setnumber(8475859652);
        $user->setemail('maahishah1996@gmail.com');

        // tells Doctrine you want to (eventually) save the User (no queries yet)
        $entityManager->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new user with id '.$user->getId());
    }
}