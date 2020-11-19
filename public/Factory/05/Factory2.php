<?php
class Factory
{
    const KOREAN = 'ko';
    const ENGLISH = 'en';

    static public function getInstance($type = null)
    {
        echo '팩토리: 객체를 생성하여 반환합니다. \n';

        if ($type === self::KOREAN) {
            return new Korean();
        } else if ($type === self::ENGLISH) {
            return new English();
        }
    }
}