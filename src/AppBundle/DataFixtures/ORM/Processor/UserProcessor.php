<?php

namespace AppBundle\DataFixtures\ORM\Processor;

use AppBundle\Entity\User;
use Fidry\AliceDataFixtures\ProcessorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserProcessor implements ProcessorInterface
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @param string $id
     * @param object $object
     */
    public function preProcess(string $id, $object): void
    {
        if (! $object instanceof User) {
            return;
        }

        $password = $this->passwordEncoder->encodePassword($object, $object->getPassword());
        $object->setPassword($password);
    }

    /**
     * @param string $id
     * @param object $object
     */
    public function postProcess(string $id, $object): void
    {

    }
}