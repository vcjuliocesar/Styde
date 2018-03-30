<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Reducción de condicionales y código estructurado 
***/
namespace Styde;

require '../vendor/autoload.php';

$ramm = new Unit('Ramm',new Weapons\BasicSword);

//$ramm->setArmor(new Armors\SilverArmor());

$julio = new Unit('Julio',new Weapons\FireBow);

$julio->attack($ramm);

$julio->attack($ramm);

$ramm->attack($julio);
