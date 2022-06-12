<?php
require "Memento.php";
require "Originator.php";
require "CareTaker.php";

require "Hello.php";

// 원조본, 케어테이커 객체를 생성합니다.
$origin = new Originator();
$care = new CareTaker();

// 첫 번째 인사말
$obj = new Hello("상태1: 안녕하세요.");
echo ">>" . $obj->getMessage() . "\n";

// 원조본에 객체를 설정, 저장합니다.
$origin->setState($obj);
$care->push($origin);

// 상태 변경, 두 번째 인사말
// 상태2를 설정하고, 메멘토를 통해 원조본을 케어테이커에 저장합니다.
$obj->setMessage("상태2: Hello nice meet you.");
echo ">>" . $obj->getMessage() . "\n";
$origin->setState($obj);
$care->push($origin);

// 상태 변경, 두 번째 인사말
// 상태3을 설정하고 메멘토를 통해 원조본을 케어테이커에 저장합니다.
$obj->setMessage("상태3: こんにちは");
echo ">>". $obj->getMessage() . "\n";
$origin->setState($obj);
$care->push($origin);

// 메멘토를 통해 상태3을 복원합니다.
$obj = $care->undo($origin);
echo "<<". $obj->getMessage() . "\n";

// 메멘토를 통해 상태2를 복원합니다.
$obj = $care->undo($origin);
echo "<<" . $obj->getMessage() . "\n";

// 메멘토를 통해 상태1을 복원합니다.
$obj = $care->undo($origin);
echo "<<" . $obj->getMessage() . "\n";