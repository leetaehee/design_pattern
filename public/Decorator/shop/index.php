<?php
require "Component.php";
require "Product1.php";

require "Decorate.php";
require "i7.php";
require "ssd256.php";

$p = new Product1();

$spec = new i7($p);
$spec = new ssd256($spec);

echo "스펙=" . $spec->product() . "\n";
echo "가격=" . $spec->price() . "\n";