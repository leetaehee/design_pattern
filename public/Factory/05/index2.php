<?php
include 'Factory2.php';
include 'Hello.php';
include 'Korean.php';
include 'English.php';

$obj = new Hello();

echo $obj->greeting(Factory::KOREAN);
echo $obj->greeting(Factory::ENGLISH);