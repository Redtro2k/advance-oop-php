<?php
namespace Entities;

class Person{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function greet(){
        return "Hello, I am {$this->name}";
    }
}