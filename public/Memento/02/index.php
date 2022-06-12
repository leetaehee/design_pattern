<?php
require "Memento.php";
require "Originator.php";

require "Hello.php";

// 원조본 객체를 생성합니다.
$origin = new Originator();

// 첫 번째 인사말
$obj = new Hello("상태1: 안녕하세요.");
echo $obj->getMessage() . "\n";


// 상태1을 설정하고, 원조본을 메멘토를 통해 저장합니다.
$origin->setState($obj);
$memento = $origin->create(); // 저장

// 상태 변경
// 두 번째 인사말
$obj->setMessage("상태2: Hello nice meet you.");
echo $obj->getMessage() . "\n";

// 메멘토를 통해 상태1을 복원합니다.
$origin->restore($memento);
$obj = $origin->getState();
echo $obj->getMessage() . "\n";
