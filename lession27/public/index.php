<?php

require "../vendor/autoload.php";

use Styde\User;


$user = new User([
    'first_name' => 'Julio',
    'last_name' => 'Cesar',
    'birthDate' => '28/05/1988',
]);

echo "<p>{$user->full_name} tiene {$user->age} años";