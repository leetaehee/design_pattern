<?php

require 'Factory.php';
require 'LgProduct.php';
require 'ProductFactory.php';

$fac = new ProductFactory();
$pro = $fac->create();
$pro->name();