<?php
include 'Hello.php';
include 'Korean.php';

$korean = new Korean();

$obj = new Hello($korean);

echo $obj->greeting();