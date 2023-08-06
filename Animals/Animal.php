<?php
namespace Animals;

class Animal{
    private $species;
    public function __construct($species){
        $this->species = $species;
    }
    public function makeSound(){
        return "The {$this->species} make a sound!";
    }
}