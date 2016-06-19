<?php

namespace MessengerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function profileAction($id)
    {
        return $this->render('MessengerBundle:Messenger/User:profile.html.twig', array('id' => $id));
    }
}
