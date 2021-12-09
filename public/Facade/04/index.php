<?php
require "../03/Package1.php";
require "../03/Package2.php";
require "../03/Package3.php";

require "Facade.php";

// 파사드
$obj = new Facade();
$obj->processAll();