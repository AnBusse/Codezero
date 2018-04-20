<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 20-4-18
 * Time: 21:42
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomepageController
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
        return new Response(sprintf('show me more %s ', $item));
    }

}