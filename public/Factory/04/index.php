<?php
include 'Factory.php';
include 'Hello.php';
include 'Korean.php';

$obj = new Hello();

echo $obj->greeting();