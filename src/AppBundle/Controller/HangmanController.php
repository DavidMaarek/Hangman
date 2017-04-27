<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HangmanController extends Controller{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('hangman/index.html.twig');
    }

    /**
     * @Route("/game", name="game")
     */
    public function gameAction()
    {
        // replace this example code with whatever you need
        return $this->render('hangman/game.html.twig');
    }

    /**
     * @Route("/failed", name="failed")
     */
    public function failedAction()
    {
        // replace this example code with whatever you need
        return $this->render('hangman/failed.html.twig');
    }

    /**
     * @Route("/won", name="won")
     */
    public function wonAction()
    {
        // replace this example code with whatever you need
        return $this->render('hangman/won.html.twig');
    }
}