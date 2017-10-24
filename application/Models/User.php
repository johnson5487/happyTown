<?php

namespace App\Models;

class User
{

    public $firstName;

    public function setFirstName($name){
        $this->firstName = $name;

    }

    public function getFirstName(){
        return $this->firstName;
    }

}

