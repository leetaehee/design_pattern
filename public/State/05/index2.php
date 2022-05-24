<?php
require 'State.php';
require 'StateOrder.php';
require 'StatePAY.php';
require 'StateOrdered.php';
require 'StateFinish.php';

require 'JinyOrder.php';

$obj = new JinyOrder();
$obj->process("ORDERED");