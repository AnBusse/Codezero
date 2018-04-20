<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 20-4-18
 * Time: 21:42
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('my first symfony4 page, wohooo!');
    }

    /**
     * @Route("/showNext/{item}")
     */
    public function showAll($item)
    {
        return $this->render('single/singleItem.html.twig', [
            'title' => ucwords(str_replace('-',' ', $item)),
        ]);
    }

}