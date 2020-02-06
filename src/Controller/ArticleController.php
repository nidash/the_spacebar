<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController {

  /**
   * @Route("/")
   */
  public function homepage()
  {
    return new Response('My first page');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {
    $comments = [
      'Hello this is nice',
      'Well i dont think so, you may agree but i may not',
      'Both can fight, i love it.'
    ];

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-', ' ', $slug)),
      'comments' => $comments
    ]);
  }
}