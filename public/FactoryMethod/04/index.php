<?php

require 'Factory.php';
require 'LgProduct.php';
require 'SamsungProduct.php';
require 'ProductFactory.php';

$fac = new ProductFactory();

$pro = $fac->create('LG');
$pro->name();

echo '\n';

$pro = $fac->create('SAMSUNG');
$pro->name();