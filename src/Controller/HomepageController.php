<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 20-4-18
 * Time: 21:42
 */

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Michelf\MarkdownInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('homepage.html.twig',[
            'items' => [
                [
                    'title' => 'Houdoe',
                    'description' => 'OMG, really?',
                    'top_comment' => 'aaaaaaaaaaaaa',
                ],
                [
                    'title' => 'OMS Exception',
                    'description' => 'bbbbbbbbbbbbbbbb',
                    'top_comment' => 'hahaha, "OMS Ex??"',
                ],
                [
                    'title' => 'Span tag gif background',
                    'description' => 'ccccccccccccccccc',
                    'top_comment' => 'Why would anyone do this??',
                ],
                [
                    'title' => 'function in a function to call a function',
                    'description' => 'dddddddddddd',
                    'top_comment' => 'Super helpful. Not.',
                ],
            ]
        ]);
    }

    /**
     * @Route("/show/{slug}", name="showItem")
     */
    public function showAll($slug, MarkdownInterface $markdown, AdapterInterface $cache)
    {

        $explanation = 'Spicy **jalapeno bacon** ipsum dolor amet veniam shank in dolore. Ham hock nisi landjaeger cow,
                    lorem proident [beef ribs](https://baconipsum.com/) aute enim veniam ut cillum pork chuck picanha. Dolore reprehenderit
                    labore minim pork belly spare ribs cupim short loin in. Elit exercitation eiusmod dolore cow
                    turkey shank eu pork belly meatball non cupim.
                    Laboris beef ribs fatback fugiat eiusmod jowl kielbasa alcatra dolore velit ea ball tip. Pariatur
                    laboris sunt venison, et laborum dolore minim non meatball. Shankle eu flank aliqua shoulder,
                    capicola biltong frankfurter boudin cupim officia. Exercitation fugiat consectetur ham. Adipisicing
                    picanha shank et filet mignon pork belly ut ullamco. Irure velit turducken ground round doner incididunt
                    occaecat lorem meatball prosciutto quis strip steak.
                    Meatball adipisicing ribeye bacon strip steak eu. Consectetur ham hock pork hamburger enim strip steak
                    mollit quis officia meatloaf tri-tip swine. Cow ut reprehenderit, buffalo incididunt in filet mignon
                    strip steak pork belly aliquip capicola officia. Labore deserunt esse chicken lorem shoulder tail consectetur
                    cow est ribeye adipisicing. Pig hamburger pork belly enim. Do porchetta minim capicola irure pancetta chuck
                    fugiat.';

        dump($cache);

        $cacheItem = $cache->getItem('markdown_'.md5($explanation));

        if(!$cacheItem->isHit()){
            $cacheItem->set($markdown->transform($explanation));
            $cache->save($cacheItem);
        }

        $explanation = $cacheItem->get();

        return $this->render('item/singleItem.html.twig', [
            'slug' => $slug,
            'title' => ucwords(str_replace('-',' ', $slug)),
            'codeContent' => 'throw new OMS Exception("aaaaa");',
            'explanation' => $explanation,
            'comments' => [
                            'OMG, really?',
                            'hahaha, "OMS Ex??"',
                            'Why would anyone do this??',
                            'Super helpful. Not.'
            ],
            ''
        ]);
    }

    /**
     * @Route("/item/{slug}/heart", name="item_toggle_heart", methods={"POST"})
     */
    public function toggleItemHeart($slug, LoggerInterface $logger)
    {
        $logger->info('article getting hearted!');
        // TODO actually heart - unheart this item
        return new JsonResponse(['hearts' => rand(5,100)]);
    }

}