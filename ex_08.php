<?php

interface iMove
{
    public function moveRight();
    public function moveLeft();
    public function moveUp();
    public function moveDown();
}
class Character implements iMove
{
    protected $name;
    protected $endurance = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $mana = 2;
    const CLASSE = 'Character';

    public function moveRight()
    {
        echo $this->getName() . ": moves right.\n";
    }

    public function moveLeft()
    {
        echo $this->getName() . ": moves left.\n";
    }

    public function moveUp()
    {
        echo $this->getName() . ": moves up.\n";
    }

    public function moveDown()
    {
        echo $this->getName() . ": moves down.\n";
    }

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getAgility()
    {
        return $this->agility;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getMana()
    {
        return $this->mana;
    }

    public function getClasse()
    {
        return $this->CLASSE = self::CLASSE;
    }
}

class Paladin extends Character implements iMove
{
    const CLASSE = 'Paladin';

    public function __construct($name)
    {
        $this->name = $name;
        $this->endurance = 100;
        $this->strength = 10;
        $this->agility = 8;
        $this->mana = 3;
        echo parent::getName() . ": I'll engrave my name in the history !\n";
    }

    public function moveRight()
    {
        echo $this->getName() . ": moves right like a bad boy.\n";
    }

    public function moveLeft()
    {
        echo $this->getName() . ": moves left like a bad boy.\n";
    }

    public function moveUp()
    {
        echo $this->getName() . ": moves up like a bad boy.\n";
    }

    public function moveDown()
    {
        echo $this->getName() . ": moves down like a bad boy.\n";
    }
    public function attack()
    {
        echo parent::getName() . ": I'll crush you with my hammer !\n";
    }

    public function __destruct()
    {
        echo  parent::getName() . ": Aarrg I can't believe I'm dead...\n";
    }
}

class Mage extends Character
{
    const CLASSE = 'Mage';


    public function __construct($name)
    {
        $this->name = $name;
        $this->endurance = 70;
        $this->strength = 3;
        $this->agility = 10;
        $this->mana = 10;
        echo parent::getName() . ": May the gods be with me.\n";
    }

    public function moveRight()
    {
        echo $this->getName() . ": moves right with grace.\n";
    }

    public function moveLeft()
    {
        echo $this->getName() . ": moves left with grace.\n";
    }

    public function moveUp()
    {
        echo $this->getName() . ": moves up with grace.\n";
    }

    public function moveDown()
    {
        echo $this->getName() . ": moves down with grace.\n";
    }
    public function attack()
    {
        echo $this->name . ": Feel the power of my magic !\n";
    }

    public function __destruct()
    {
        echo parent::getName() . ": By the four gods, I passed away...\n";
    }
}
