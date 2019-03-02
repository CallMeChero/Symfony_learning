<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//to limit http requests
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleController extends Controller {
    /**
     * @Route("/")
     * @Method({"GET"})
     */

    public function index() {
        // return new Response('<html><body>Hello</body></html>');

        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

    // /**
    //  * @Route("/article/save")
    //  */
    // public function save() {
    //     $entityManager = $this->getDoctrine()->getManager();

    //     $article = new Article();
    //     $article->setTitle('Article from Controller');
    //     $article->setBody('This is first article that I\'ve made from controller');
    //     $entityManager->persist($article);

    //     $entityManager->flush();

    //     return new Response('Saved an article with an id = '. $article->getId());
    // }

}