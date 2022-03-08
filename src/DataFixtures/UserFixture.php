<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixture extends Fixture
{
    private $hasher;
    
    public function __construct(UserPasswordHasherInterface $hasher){
        $this->hasher = $hasher;
    }
        
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setUsername('admin');
        $user1->setPassword($this->hasher->hashPassword($user1, 'admin'));
        $user1->setRoles(["ROLE_ADMIN"]);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setUsername('user');
        $user2->setPassword($this->hasher->hashPassword($user2, 'user'));
        $user2->setRoles(["ROLE_USER"]);
        $manager->persist($user2);


        $manager->flush();
    }
}