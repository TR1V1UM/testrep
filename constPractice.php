<?php

const A = 'constanta';


class X{
    const A = 'constanta1';
}

$a = new X();
echo $a::A;


class Color {

    const BLACK = '#000';
    const WHITE = '#FFF';
    const GOLD = '#FFD700';
    const GREEN = '#00FF00';
    const RED = '#FF0000';


}

class Auto{

    const BMW = 'BMW';
    const AUDI = 'Audi';
    const VAZ = 'ВАЗ';
    const TAZ = 'Тазик';

    public $name;

    public function imagine()
    {
        switch ($this->name)
        {
            case Auto::BMW:
                return Color::GOLD;
                break;
            case Auto::AUDI:
                return Color::BLACK;
                break;
            case Auto::VAZ:
                return Color::GREEN;
                break;
            case Auto::TAZ:
                return Color::WHITE;
                break;
        }
    }
}


$a = new Auto();
$a->name = $a::AUDI;

$a1 = new Auto();
$a1->name = Auto::VAZ;

var_dump([
    $a->imagine(),
    $a1->imagine()
]);