<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Composer y PSR-4 
***/
namespace Styde;

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();

$ramm = new Soldier('Ramm');

$julio = new Archer('Julio');

//$julio->move('el norte');
$julio->attack($ramm);

$ramm->setArmor(new Armors\CursedArmor);

$julio->attack($ramm);

$ramm->attack($julio);
