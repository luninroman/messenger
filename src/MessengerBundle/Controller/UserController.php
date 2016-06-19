<?php

namespace MessengerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class UserController extends Controller
{
    public function profileAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $user = $em->getRepository('MessengerBundle:User')->find($id);
        if (! $user) {
            throw new Exception('User with id '.$id.' was not found!');
        }

        return $this->render('MessengerBundle:Messenger/User:profile.html.twig', array('user' => $user));
    }
}
