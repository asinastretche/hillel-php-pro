<?php

namespace Classes\factory_method;

class EconomTaxi implements Taxi
{
    public function getModelCar():string
    {
        return "econom model car";
    }
    public function price():string
    {
        return "5$";
    }
}