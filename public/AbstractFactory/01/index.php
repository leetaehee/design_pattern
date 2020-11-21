<?php

require 'Factory.php';
require 'KoreaFactory.php';
require 'StateFactory.php';

require 'DoorProduct.php';
require 'TireProduct.php';

require 'KoreaDoorProduct.php';
require 'KoreaTireProduct.php';

require 'StateDoorProduct.php';
require 'StateTireProduct.php';

echo '추상 팩토리 패턴을 실습합니다.';

// 한국공장
$korea = new KoreaFactory();

$ham = $korea->createTire();
$ham->makeAssemble();

$bread = $korea->createDoor();
$bread->makeAssemble();

echo '\n';

// 미국공장
$state = new StateFactory();

$ham = $state->createTire();
$ham->makeAssemble();

$bread = $state->createDoor();
$bread->makeAssemble();
