<?php
require 'LightState.php';
require 'LightLamp.php';

$obj = new LightLamp();
echo $obj->lightOn()->lightState() . "\n";
echo $obj->lightOff()->lightState() . "\n";

echo $obj->lightOn()->lightState() . "\n";
echo $obj->lightOn()->lightState() . "\n";