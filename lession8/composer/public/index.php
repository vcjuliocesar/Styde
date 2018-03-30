<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Repaso y solución de ejercicios 
***/
namespace Styde;

require '../vendor/autoload.php';

$ramm = new Soldier('Ramm',new Weapons\BasicSword);

$ramm->setArmor(new Armors\BronzeArmor());

$julio = new Archer('Julio',new Weapons\CrossBow);

$julio->attack($ramm);

$julio->attack($ramm);

$ramm->attack($julio);
