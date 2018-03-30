<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Autocarga y nombres de espacio
***/
namespace Styde;

require 'src/helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
    show("Intentando cargar $className");
    if (strpos($className, 'Styde\\') === 0) {
        $className = str_replace('Styde\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$julio = new Archer('Julio');

//$julio->move('el norte');
$julio->attack($ramm);

$ramm->setArmor(new CursedArmor);

$julio->attack($ramm);

$ramm->attack($julio);
