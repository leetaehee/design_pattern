<?php
class Config
{
    private static $instance = null;

    private function __construct()
    {
        echo __CLASS__ . '가 생성이 되었습니다. \n';
    }

    private function __clone()
    {
        echo __CLASS__ . '가 복제 되었습니다. \n';
    }

    public static function getInstance()
    {
        if (isset(self::$instance) === false) {
            echo __CLASS__  . '객체를 생성합니다. \n';
            self::$instance = new self();
        }

        echo __CLASS__ . '객체를 반환합니다. \n';

        return self::$instance;
    }
}