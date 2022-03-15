<?php
require "Command.php";
require "Exec1.php";

// 명령 객체를 생성합니다.
$cmd = new Exec1();

// 객체를 실행합니다.
$cmd->execute();
$cmd->undo();