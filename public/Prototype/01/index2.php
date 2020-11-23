<?php
include 'Hello.php';

$ko = new Hello('안녕하세요');
$en = new Hello('Hello, Wrold');

echo $ko->getMessage() . '\n';
echo $en->getMessage() . '\n';