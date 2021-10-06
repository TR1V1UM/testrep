<?php

class Human{

    public $name;
    public $surname;
    public $birthYear;

    public function getFullName()
    {
        return "{$this->name} {$this->surname}  ({$this->getAge()})";
    }

    public function getAge()
    {
        return date('Y') - $this->birthYear;
    }
}

function asd()
{
    $a = 2;
    return $a;
}

$human = new Human();
$human->name = 'UsualHumanName';
$human->surname = 'UsualHumanSurName';
$human->birthYear = 1921;

echo $human->getFullName();


$human2 = new Human();
$human2->name = 'UnusualHumanName';