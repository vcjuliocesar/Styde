<?php
/***
  Programer:Julio Cesar Valadez castañeda
  Course:PHP-OOP Styde.net
  theme:Herencia y abstracción
***/
abstract class Unit {
    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "<p>{$this->name} camina hacia {$direction}</p>";
    }

    abstract public function attack($opponent);
}

class Soldier extends Unit {
    public function attack($opponent)
    {
        echo "<p>{$this->name} corta a $opponent en dos</p>";
    }
}

class Archer extends Unit {
    public function attack($opponent)
    {
        echo "<p>{$this->name} dispara una flecha a $opponent</p>";
    }
}

$julio= new Archer('Julio');
//$julio->move('el norte');
$julio->attack('Ramm');
