<?php

abstract class Algorism
{
    protected $Composite;

    abstract public function setCpu($cpu);
    abstract public function setRam($size);
    abstract public function setStorage($size);

    public function getInstance()
    {
        return $this->Composite;
    }
}