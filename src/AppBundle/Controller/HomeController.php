<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $abstract = ['1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg','1.jpg'];
        $summer = ['2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg','2.jpg'];
        $winter = ['3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg'];

        $images = array_merge($abstract, $summer, $winter);
        shuffle($images);
        $randomImages =  array_slice($images, 0, 8);


        return $this->render('home/index.html.twig', [
            'radomImages' => $randomImages,
            'abstract'    => array_slice($abstract,0,2),
            'summer'    => array_slice($summer,0,2),
            'winter'    => array_slice($winter,0,2),
        ]);
    }
}
