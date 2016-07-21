<?php

namespace MessengerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class MessengerController extends Controller
{
    public function showAction()
    {
        return $this->render('MessengerBundle:Messenger/Front:messenger.html.twig');
    }
}