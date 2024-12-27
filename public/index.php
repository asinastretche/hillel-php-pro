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
use Classes\builder\Contact;

$contact = new Contact();
$contact1 = $contact->phone('1234567890')
            ->name('John Doe')
            ->email('test@gmail.com')
            ->address('street51')
            ->build();

