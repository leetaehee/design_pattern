<?php
class Factory
{
    static public function getInstance()
    {
        echo '팩토리: 객체를 생성하여 반환합니다.\n';
        return new Korean;
    }
}