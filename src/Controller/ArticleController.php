<?php
/**
 * Created by PhpStorm.
 * User: cynthia
 * Date: 01/07/19
 * Time: 11:46
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @return Response
     *
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! This is my first page!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article: "%s"', $slug));
    }
}