<?php
 spl_autoload_register(function ($class) {
     $class = str_replace('\\', '/', $class);
     $path = __DIR__ . "/index.php";

     echo $path. '<br>';

     if (!file_exists($path)) {
        throw new Exception("Class $class not found");
     }
     require_once $path;
 });


