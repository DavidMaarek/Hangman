<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}/{toto}", name="helloworld")
     */
    public function helloAction($name, $toto){
        return new Response("Hello $name $toto");
    }

    /**
     * @Route("/birthday/{month}/{day}",
     *     requirements = {
     *      "month" = "(0[1-9])|(1[0-2])",
     *      "day" = "(0[1-9])|([1-2][0-9])|(3[0-1])"
     *     })
     */
    public function birthdayAction($month, $day){
        $weekdays = [];
        for ($i = 0; $i < 10; $i++){
            $birthday = new \DateTime('2017-'.$month.'-'.$day);
            $currentYear = 2017 + $i;
            $birthday->modify('+'.$i.'years');
            $weekdays[$currentYear] = $birthday->format('l');
        }

        dump($weekdays);exit;
    }

    /**
     * @Route("/homeexemple", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
