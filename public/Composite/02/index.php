<?php
require 'Computer.php';
require 'Monitor.php';
require 'Disk.php';
require 'Memory.php';

$obj = new Computer();
$obj->setMonitor(new Monitor);
$obj->setDisk(new Disk);
$obj->setMemory(new Memory);

echo $obj->name . '\n';
echo $obj->monitor->name . '\n';
echo $obj->disk->name . '\n';
echo $obj->memory->name .'\n';
