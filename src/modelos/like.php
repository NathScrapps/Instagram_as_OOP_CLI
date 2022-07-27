<?php
namespace Nathscrapps\Phppoo\modelos;

class Like{
    public function __construct(private User $user){

    }

    public function getUser():User{
        return $this->user;
    }
}