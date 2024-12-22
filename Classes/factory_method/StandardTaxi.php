<?php

namespace Classes\factory_method;

class StandardTaxi implements Taxi
{
    public function getModelCar():string
    {
        return "standard model car";
    }
    public function price():string
    {
        return "15$";
    }
}