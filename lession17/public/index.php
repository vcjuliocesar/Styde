<?php
/***
  Programador:Julio Cesar Valadez castañeda
  Curso:PHP-OOP Styde.net
  tema:__call y __callStatic
***/
use Styde\HtmlNode;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Styde')
    ->name('content')
    ->id('contenido');

$node = new HtmlNode('textarea', 'Styde', ['name' => 'content', 'id' => 'contenido']);

echo $node->render();
