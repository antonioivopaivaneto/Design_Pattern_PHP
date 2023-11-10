<?php

namespace src\App\Factory;


class ProductFactory
{
    public static function create($kind)
    {
        $kindClass = "src\App\Factory\Product{$kind}";
       

        if(!class_exists($kindClass)){
            throw new \Exception("class Product{$kind} not found");
        }

        return new $kindClass;
    }
    

    
}

?>