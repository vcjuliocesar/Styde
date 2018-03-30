<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:Llamadas dinámicas a métodos 
***/
use Styde\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
  'first_name' => 'Julio Cesar',
  'last_name' => 'Castañeda',
]);

$user->nickname = 'Mr.J';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if(isset ($user->nickname)){
  echo "<p>Nickname: {$user->nickname}</p>";
}
