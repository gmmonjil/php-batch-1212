<?php

namespace App\classes;

class HelloWorld
{
    public $message, $name, $location;
    public function __construct()
    {
        $this->message ="Hello";
        $this->name = "BITM";
        $this->location = "Chandpur";
    }
    public function index()
    {
        echo $this->message;

    }

}