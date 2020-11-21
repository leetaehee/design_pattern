<?php

class ENV extends Config
{
    public function setting()
    {
        echo '시스템 환경을 설정합니다. \n';
    }

    public static function getInstance()
    {
        if (isset(self::$Instance) === false) {
            echo __CLASS__ . '객체를 생성합니다. \n';

            self::$Instance = new self();
        }

        echo __CLASS__ . '객체를 반환합니다. \n';

        return self::$Instance;
    }
}