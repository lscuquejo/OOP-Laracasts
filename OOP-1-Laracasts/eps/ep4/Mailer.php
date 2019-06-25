<?php
/**
 * Created by PhpStorm.
 * User: leonardocuquejo
 * Date: 2019-06-25
 * Time: 11:09
 */

class Mailer
{
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends Mailer{

}

class AdminMailer extends Mailer {
    public function sendWelcomeEmail(User $user)
    {
        return $this->send($user->email);
    }
}