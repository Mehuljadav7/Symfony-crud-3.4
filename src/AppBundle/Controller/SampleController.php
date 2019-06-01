<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SampleController extends Controller
{
    /**
     * @Route("/home/{name}", name="homepage1")
     */
    
     public function showAction( $name)
     {
         $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        return $this ->render('genus/show.html.twig',[
            'name' => $name,
            'notes' => $notes
        ]);
     }
}
