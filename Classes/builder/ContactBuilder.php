<?php

namespace Classes\builder;

interface ContactBuilder {
    public function name(string $name):self;
    public function surname(string $surname):self;
    public function email(string $email):self;
    public function phone(string $phone):self;
    public function address(string $address):self;
    public function build();

}