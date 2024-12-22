<?php
namespace Classes;


interface Eating
{
    public function eat();
}

interface Flying
{
    public function fly();
}

class Swallow implements Eating, Flying
{
    public function eat() {

    }
    public function fly() {

    }
}

class Ostrich implements Eating
{
    public function eat(){}
}
