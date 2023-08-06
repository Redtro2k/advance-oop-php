<?php 
namespace Animals;
class Dog implements AnimalInterface{
    private $species;
    public function __construct($species)
    {
        $this->species = $species;
    }
    public function makeSound()
    {
        return "The {$this->species} barks!";
    }
}