<?php

namespace Classes\factory_method;

class EconomTaxiCreator extends Creator
{
    public function factoryMethod(): Taxi
    {
        return new EconomTaxi();
    }
}