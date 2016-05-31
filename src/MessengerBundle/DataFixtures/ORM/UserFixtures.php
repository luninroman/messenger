<?php

namespace PT\HearingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadAdmin implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $om)
    {
        $um   = $this->container->get('fos_user.user_manager');
        $user = $um->createUser();

        $user->setUsername('developer');
        $user->setEmail('roman.lunin91@gmail.com');
        $user->setPlainPassword('1111');
        $user->setEnabled(true);
        $user->setSuperAdmin(true);

        $um->updateUser($user);
    }
}
