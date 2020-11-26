<?php
require 'Computer.php';
require 'Monitor.php';
require 'Disk.php';
require 'Memory.php';
require 'Monitor32.php';

$obj = new Computer();
$obj->setMonitor(new Monitor);
$obj->monitor->addMonitor(new Monitor32);
$obj->monitor->addMonitor(new Monitor32);

$obj->setDisk(new Disk);
$obj->setMemory(new Memory);

echo $obj->name . '\n';
echo $obj->monitor->name .'\n';
$obj->monitor->show();

echo $obj->disk->name .'\n';
echo $obj->memory->name . '\n';