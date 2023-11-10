<?php

namespace src\App\Factory;

class ProductNotebook
{
    private $name;
    private $info;

    public function __construct()
    {
        $this->name = 'Notebook X';
        $this->info = '6 Gb ';
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(String $name):void{
        $this->name = $name;

    }
}