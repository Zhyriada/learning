<?php

class Animal
{
    protected $legs = 4;

    public function info()
    {
        echo "У меня {$this->legs} лапы.";
    }
}

class Dog extends Animal
{
    public $name = "Собака";

    public function info()
    {
        echo "Я {$this->name}, У меня {$this->legs} лапы.";
    }

    public function voice()
    {
        echo "{$this->name} издает звук гав-гав.";
    }

    public function parentInfo()
    {
        parent::info();
    }
}

class Cat extends Animal
{
    public $name = "Кошка";

    public function voice()
    {
        echo "{$this->name} издает звук мяу.";
    }
}

$dog = new Dog();
$dog->info();
$dog->voice();
$dog->parentInfo();
?>