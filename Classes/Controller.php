<?php

namespace Classes;

class Controller
{
    private $adapter;

    public function __construct(Mysql $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}