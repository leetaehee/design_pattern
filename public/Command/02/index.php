<?php
require "Command.php";
require "Exec2.php";

// concrete
require "Concrete.php";

$receiver = new Concrete();

// 명령 객체를 생성합니다.
$cmd = new Exec2($receiver);

// 객체를 실행합니다.
$cmd->execute();