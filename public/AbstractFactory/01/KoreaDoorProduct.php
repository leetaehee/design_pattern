<?php

class KoreaDoorProduct extends DoorProduct
{
    public function __construct()
    {
        echo 'Product =' . __CLASS__ . '객체를 생성합니다. \n';
    }

    public function makeAssemble()
    {
        echo '메서드 호출 ' . __METHOD__ . '\n';
        echo '한국형 도어 장착 \n';
    }
}