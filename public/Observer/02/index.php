<?php
// 주체(subject)
require "Subject.php";
require "Members.php";

// 감시자 객체
require "Observer.php";
require "UserA.php";
require "UserB.php";

echo "감시자 패턴을 실행합니다.\n";

$subject = new Members();

// 감시자에 등록합니다.
$a = new UserA("Jiny");
$subject->addObserver($a);

$b = new UserB("Eric");
$subject->addObserver($b);

// 모든 감시자에게 통지를 전송합니다.
$subject->notiObserver();