<?php

namespace Classes;

class User
{
    private string $name;
    private int $age;
    private string $email = '';

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        } else {
            throw new MethodNotFound($name);
        }
    }
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAll()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email
        ];
    }
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }
    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

}