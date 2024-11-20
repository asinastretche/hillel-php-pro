<?php

namespace Classes;

class MethodNotFound extends \Exception
{
    public function __construct($method)
    {
        $message = "Метод '$method' не існує";
        parent::__construct($message);
    }
}