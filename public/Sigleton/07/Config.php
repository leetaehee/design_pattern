<?php

class Config
{
    static public $conf = null;

    public static function set($val)
    {
        self::$conf = $val;
    }

    public static function get()
    {
        return self::$conf;
    }
}

Config::set('hello');
echo Config::get();