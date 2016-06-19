<?php

namespace MessengerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessengerController extends Controller
{
    public function showAction()
    {
        return $this->render('MessengerBundle:Messenger/Front:messenger.html.twig');
    }
}