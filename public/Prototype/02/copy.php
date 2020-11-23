<?php
include 'Hello.php';

$obj = new Hello('안녕하세요.');

echo '원본내용=' . $obj->getMessage() . '\n';

$obj2 = $obj;
$obj2->setMesssage('Hello World');

echo 'obj2 =' . $obj2->getMessage() . '\n';

echo 'obj =' . $obj->getMessage();