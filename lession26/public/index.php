<?php

require "../vendor/autoload.php";

use Styde\User;


$user = new User([
    'name' => 'Julio Cesar',
    'birthDate' => '28/05/1988',
]);

echo "<p>{$user->name} tiene {$user->age} años";