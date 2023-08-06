<?php
require_once 'vendor/autoload.php';

use Entities\Person;
use Animals\Animal;

$person = new Person('john');
$animal = new Animal('Dog');

echo $person->greet();
echo $animal->makeSound();

