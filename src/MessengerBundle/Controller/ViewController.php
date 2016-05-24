<?php

namespace MessengerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller
{
    public function showAction()
    {
        return $this->render('MessengerBundle:Front:index.html.twig');
    }
}