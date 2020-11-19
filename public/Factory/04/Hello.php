<?php
class Hello
{
    public function greeting()
    {
        $ko = Factory::getInstance();
        return $ko->text();
    }
}