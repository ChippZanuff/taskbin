<?php

class UserAndAddresses
{
    protected $user, $userAddress;

    public function __construct(\App\Models\User $user, \App\Models\UserAddresses $userAddress)
    {
        $this->user = $user;
        $this->userAddress = $userAddress;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getUserAddress()
    {
        return $this->userAddress;
    }
}