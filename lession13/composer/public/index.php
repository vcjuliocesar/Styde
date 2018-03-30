<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Creación y uso de “Facades” e interfaces 
***/
namespace Styde;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

Log::setLogger(new FileLogger());

$ramm = Unit::createSoldier()
    ->setWeapon(new Weapons\BasicSword())
    ->setArmor(new Armors\SilverArmor())
    ->setShield();

$julio = new Unit('Julio',new Weapons\FireBow);

$julio->attack($ramm);

$julio->attack($ramm);

$ramm->attack($julio);
