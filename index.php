<?php
 spl_autoload_register(function ($class) {
     $class = str_replace('\\', '/', $class);
     $path = __DIR__ . "/$class.php";

     echo $path. '<br>';

     if (!file_exists($path)) {
        throw new Exception("Class $class not found");
     }
     require_once $path;
 });


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
