<?php
require 'Factory.php';
require 'LgProduct.php';

$fac = new Factory();
$pro = $fac->create();

echo $pro->name();