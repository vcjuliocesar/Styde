<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Interacción entre objetos
***/
function show($message)
{
    echo "<p>{$message}</p>";
}

abstract class Unit
{
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia {$direction}");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        show("{$this->name} muere");
    }

    private function setHp($points)
    {
        $this->hp = $points;
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }
}

class Soldier extends Unit
{
    protected $damage = 40;
    public function attack(Unit $opponent)
    {
        show("{$this->name} corta a {$opponent->getName()} en dos");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }
}

class Archer extends Unit
{
    protected $damage = 20;
    public function attack(Unit $opponent)
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        if (rand(0, 1)) {
            parent::takeDamage($damage);
        }
    }
}

$ramm = new Soldier('Ramm');

$julio = new Archer('Julio');

//$julio->move('el norte');
$julio->attack($ramm);

$julio->attack($ramm);

$ramm->attack($julio);
