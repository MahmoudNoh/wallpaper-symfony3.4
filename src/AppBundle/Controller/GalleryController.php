<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function indexAction(Request $request)
    {
        $images = [
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
                '1.jpg',
            ];
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $images, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );

        dump($pagination);
        //die;
        // replace this example code with whatever you need
        return $this->render('gallery/index.html.twig', ['images' => $pagination]);
    }
}
