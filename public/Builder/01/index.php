<?php
require 'Builder.php';
require 'Factory.php';

require 'Memory.php';
require 'Storage.php';
require 'Computer.php';

require 'Algorism.php';
require 'ProductModel.php';

// 알고리즘을 생성합니다.
$algorim = new ProductModel();

// 빌더객체
$factory = new Factory();
$factory->setAlgorism($algorim);

// 생성요청
$computer = $factory->build()->getInstance();
echo $computer;