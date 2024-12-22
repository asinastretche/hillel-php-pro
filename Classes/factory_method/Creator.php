<?php

namespace Classes\factory_method;

abstract class Creator{
    abstract public function factoryMethod(): Taxi;

    public function getTaxiDetails(): string
    {
        $taxi = $this->factoryMethod();
        return "Модель: " . $taxi->getModelCar() . ", Ціна: " . $taxi->price() ;
    }
}