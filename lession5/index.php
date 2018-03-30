<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Interfaces y polimorfismo
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
        $this->hp = $this->hp - $this->absorbDamage($damage);
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        show("{$this->name} muere");
        exit();
    }

    protected function absorbDamage($damage)
    {
      return $damage;
    }
    /*private function setHp($points)
    {
        $this->hp = $points;
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }*/
}

class Soldier extends Unit
{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
      parent::__construct($name);
    }

    public function setArmor(Armor $armor = null)
    {
      $this->armor = $armor;
    }

    public function attack(Unit $opponent)
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }
    /*
    public function takeDamage($damage)
    {
      $damage = $this->absorbDamage($damage);

      return parent::takeDamage($damage / 2);
    }*/

    protected function absorbDamage($damage)
    {
      if($this->armor) {
        $damage = $this->armor->absorbDamage($damage);
      }
      return $damage;
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
    /*
    public function takeDamage($damage)
    {
        if (rand(0, 1)) {
            parent::takeDamage($damage);
        }
    }*/
}

/**
 *
 */
interface Armor
{
  public function absorbDamage($damage);
}


class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
      return $damage / 2;
    }
}

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
      return $damage / 3;
    }
}

class CursedArmor implements Armor
{
  public function absorbDamage($damage)
  {
    return $damage * 2;
  }
}

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$julio = new Archer('Julio');

//$julio->move('el norte');
$julio->attack($ramm);

$ramm->setArmor(new CursedArmor);

$julio->attack($ramm);

$ramm->attack($julio);
