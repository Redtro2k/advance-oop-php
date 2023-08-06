<?php
require_once 'vendor/autoload.php';

use Entities\Person;
use Animals\{Dog, Cat};

$person = new Person('John');
$dog = new Dog('Dog');
$cat = new Cat('Cat');
echo $person->greet();
$animals = [$dog, $cat];

foreach ($animals as $animal) {
    echo $animal->makeSound() . PHP_EOL;
}

