<?php
require 'Hello.php';
require 'Greeting.php';

$obj = new Greeting();

echo $obj->ko() . '\n';
echo $obj->greeting() . '\n';