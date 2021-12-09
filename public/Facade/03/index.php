<?php
require "Package1.php";
require "Package2.php";
require "Package3.php";

// 기존 패키지에 직접 접근하여 사용

$obj1 = new Package1();
$obj1->process();

$obj2 = new Package2();
$obj2->process();

$obj3 = new Package3();
$obj3->process();