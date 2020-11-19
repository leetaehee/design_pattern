<?php
class Factory
{
    static public function getInstance($type = null)
    {
        echo '팩토리: 객체를 생성하여 반환 합니다.\n';

        if ($type === 'ko') {
            return new Korean();
        } else if ($type == 'en') {
            return new English();
        }
    }
}