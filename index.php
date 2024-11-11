<?php
require_once 'Classes/User.php';
require_once 'Classes/MethodNotFound.php';

use Classes\User;
use Classes\MethodNotFound;

try {
    $user = new User('John Doe', 30);

    $user->setName('Jane Doe');
    $user->setAge(25);
    $user->setEmail('janedoe@gmail.com');

    $user->setTown('Odesa');


    $test = $user->getAll();
    print_r($test);
}  catch (MethodNotFound $methodNotFound)
{
    echo $methodNotFound->getMessage();
}
