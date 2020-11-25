<?php

class Message extends Language
{
    public function __construct($lang)
    {
        $this->language = $lang;
    }

    public function greeting()
    {
        // 브리지 구현
        return $this->language->greeting();
    }
}