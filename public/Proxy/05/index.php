<?php
require "Subject.php";
require "Proxy.php";
require "RealSubject.php";

require "ProxyFactory.php";

$factory = new ProxyFactory();
$proxy = $factory->getObject(); // 프록시 동적 생성
$proxy->action1();
$proxy->action2();

$proxy->action3();
$proxy->action4();