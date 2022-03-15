<?php
require "Command.php";

// 인보커
require "Invoker.php";
$Invoker = new Invoker();

// Command 인터페이스를 적용한 익명함수를 저장합니다.
$Invoker->setCommand('cmd1',
    new class implements Command
    {
        public function execute()
        {
            echo "명령1을 실행합니다. \n";
        }
    }
);

$Invoker->setCommand('cmd2',
    new class implements Command
    {
        public function execute()
        {
            echo "명령2를 실행합니다.\n";
        }
    }
);

// 객체를 실행합니다.
foreach ($Invoker->cmd as $cmd) {
    $cmd->execute();
}