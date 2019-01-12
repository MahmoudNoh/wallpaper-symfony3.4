<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends Controller
{
    /**
     * @Route("/view", name="view")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $image = '1.jpg';

        return $this->render('detail/index.html.twig', [
            'image' => $image
        ]);
    }
}
