<?php

namespace Classes\factory_method;

class StandardTaxiCreator extends Creator
{
    public function factoryMethod(): Taxi
    {
        return new StandardTaxi();
    }
}