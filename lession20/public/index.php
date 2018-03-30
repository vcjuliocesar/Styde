<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:__clone
***/
use Styde\User;

use Styde\LunchBox;

require '../vendor/autoload.php';

$gordon = new User(['name'=>'Gordon']);

// Daughters

$joanie = new User(['name'=>'Joanie']);

$haley = new User(['name'=>'Haley']);

$lunchBox = new LunchBox(['Sandwich']);

$lunchBox2 = clone($lunchBox);

// House

$joanie->setLunch($lunchBox);

$haley->setLunch($lunchBox2);


//School
$joanie->eat();

$haley->eat();


var_dump($joanie,$haley);
