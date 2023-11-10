<?php

namespace src\App\Factory;

class ProductComputer
{
    private $name;
    private $info;

    public function __construct()
    {
        $this->name = 'Computer X';
        $this->info = '6 Gb ';
    }

    public function getName() : string{
        return $this->name;
    }
}