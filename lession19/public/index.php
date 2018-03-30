<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Métodos mágicos __sleep y __wakeup en PHP
***/
use Styde\User;

require '../vendor/autoload.php';

$user = new User(['name'=>'Julio','email'=>'vcjuliocesar@outlook.com']);

$user->id=10;

echo $result = serialize($user);

file_put_contents('../storage/user.txt', $result);
