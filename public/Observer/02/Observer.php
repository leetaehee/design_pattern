<?php
abstract class Observer
{
    // 감시자 이름
    private $name;

    // 상태 업데이트
    abstract public function update();
}