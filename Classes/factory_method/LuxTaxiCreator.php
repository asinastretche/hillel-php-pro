<?php

namespace Classes\factory_method;

class LuxTaxiCreator extends Creator
{
    public function factoryMethod(): Taxi
    {
        return new LuxTaxi();
    }
}