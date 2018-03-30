<?php
/***
  Programer:Julio Cesar Valadez castañeda
  Course:PHP-OOP Styde.net
  theme:¿Por qué necesitamos clases y objetos?
***/
class Person{
    public $firstName;
    public $lastName;

    public function __construct($firstName,$lastName)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }

    public function fullName()
    {
        return $this->firstName.' '.$this->lastName;
    }
}

$person1 = new Person('Julio','Castañeda');
$person2 = new Person('Pedro','Acosta');

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";
