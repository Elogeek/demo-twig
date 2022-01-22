<?php

namespace Elodie\DemoTwig\Controller;

use Elodie\DemoTwig\Classes\Controller;
use Elodie\DemoTwig\Model\User;
use Twig\Error\Error;
use Twig\Error\LoaderError;

class UserController extends Controller {


    public function profile(int $userId): void
    {
        $user = (new User())
            ->setUsername('John')
            ->setAge(36)
            ->setBirthdate((new \DateTime())->modify('-36 year'))
            ->setMail('john@google.be')
            ->setPassword('0000')
        ;

        try {
            $this->render('profile.html.twig', [
                'user' => $user,
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }

}