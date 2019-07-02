<?php namespace Acme;

class AuthController  implements {

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        $this->registration->execute([], $this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created succ');
    }

    public function userRegisteredFailed()
    {
        var_dump('created unsucc');
    }
}