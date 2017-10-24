<?php

namespace App\Models;

class Collection{

    // protected $empty = true;
    protected $size = 0;


    public function isEmpty(){
        return $this->size === 0;
    }


    public function add( $value ){
        $this->empty = false;
        $this->size++;
    }


    public function size(){
        return $this->size;
    }
}