<?php
require "Command.php";
require "Exec1.php";
// 명령 객체를 생성합니다.
$Exec1 = new Exec1();

require "Exec2.php";
// Concrete
require "Concrete.php";
$Receiver = new Concrete();
// 명령 객체를 생성합니다.
$Exec2 = new Exec2($Receiver);

// 인보커
require "Invoker.php";
$Invoker = new Invoker();
$Invoker->setCommand('cmd1', $Exec1);
$Invoker->setCommand('cmd2', $Exec2);

// 객체를 실행합니다,
$Invoker->execute('cmd1');
$Invoker->execute('cmd2');