<?php

class Computer
{
    public $monitor;

    public $disk;

    public $memory;

    public $name = '구성';

    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;
    }

    public function setDisk($disk)
    {
        $this->disk = $disk;
    }

    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
}