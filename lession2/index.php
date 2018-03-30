<?php
/***
  Programer:Julio Cesar Valadez castañeda
  Course:PHP-OOP Styde.net
  theme:Encapsulamiento, getters y setters
***/
class Person{
    protected $firstName;
    protected $lastName;
    protected $nickname;
    protected $changedNickname=0;

    public function __construct($firstName,$lastName)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName=$firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickname($nickname)
    {
        if($this->changedNickname >= 2) {
            throw new Exception(
                "You can't changed a nickname more than 2 times"
            );
        }
        $this->nickname=$nickname;

        $this->changedNickname++;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName()
    {
        return $this->firstName.' '.$this->lastName;
    }
}

$person1 = new Person('Julio','Castañeda');

$person1->setNickname('Juliuz');

$person1->setNickname('JuliuzZ');

exit($person1->getNickname());

echo $person1->getFullName();
