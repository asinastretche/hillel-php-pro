<?php

namespace Classes\factory_method;

class LuxTaxi implements Taxi
{
    public function getModelCar():string
    {
        return "lux model car";
    }
    public function price():string
    {
        return "50$";
    }
}