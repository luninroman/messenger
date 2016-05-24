<?php

namespace MessengerBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends FOSRestController{

    public function getMessagesAction()
    {
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        return new JsonResponse($arr);
    }
}
