<?php
class Person
{
    public $id;

    public $name;

    public $online = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function is($otherPerson)
    {
        return $this->id==$otherPerson->id;
    }
}

$julio = new Person('Julio');
$julio->id = 1;
$julio->online = true;

$julio2 = new Person('Julio');
$julio2->id = 2;
$julio2->online = true;

if ($julio->is($julio2)) {
    echo "Verdadero";
} else {
    echo "Falso";
}
