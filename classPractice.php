<?php

class Cat {

    public $age;
    public $name;
}

$cat1 = new Cat();
$cat1->name = 'Машка';
$cat1->age = 2;

$cat2 = new Cat();
$cat2->name = 'Васька';
$cat2->age = 2;

echo "<pre>";
var_dump($cat1 === $cat2);

class Human{

    public $id;
    public $name;
}

$me = new Human();
$me->name = 'Artem';

$human2 = new Human();
$human2->name = 'Artem';



$user = $me;




echo "<pre>";
var_dump([
    $user == $human2, // true
    $user == $me,  // true
    $user === $me, //true
    $user === $human2 //false
]);