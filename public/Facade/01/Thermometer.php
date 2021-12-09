<?php
// 서브 시스템
class Thermometer
{
    public $temp;

    public function getTemperature() : float
    {
        return $this->temp;
    }
}