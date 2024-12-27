<?php

namespace Classes\builder;

class Contact implements ContactBuilder {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function name(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function surname(string $surname): self {
        $this->surname = $surname;
        return $this;
    }

    public function email(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function phone(string $phone): self {
        $this->phone = $phone;
        return $this;
    }

    public function address(string $address): self {
        $this->address = $address;
        return $this;
    }

    public function build()
    {
        return new Contact($this->name, $this->surname, $this->email, $this->phone, $this->address);
    }
}
