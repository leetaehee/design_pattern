<?php
require 'Computer.php';
require 'Monitor.php';

$obj = new Computer();
$obj->setMonitor(new Monitor());

echo $obj->name . '\n';
echo $obj->monitor->name .'\n';