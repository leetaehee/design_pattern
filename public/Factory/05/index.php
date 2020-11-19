<?php
include 'Factory.php';
include 'Hello.php';
include 'Korean.php';
include 'English.php';

$obj = new Hello();

echo $obj->greeting('en') . '\n';
echo $obj->greeting('ko') . '\n';