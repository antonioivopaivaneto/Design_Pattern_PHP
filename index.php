<?php

require __DIR__.'/vendor/autoload.php';

use src\App\Factory\ProductFactory;
use src\App\Factory\ProductNotebook;

$computer=  new ProductNotebook;
$notebook=  ProductFactory::create('Notebook');

echo 'Product name : '. $computer->getName();
echo '<br>';
echo 'Product name : '. $notebook->getName();

$notebook->setName('Amazon notebook');
echo '<br>';
echo 'Product name : '. $notebook->getName();

