<?php
abstract class Mediator
{
    // 중재해야 될 객체의 목록을 가지고 있습니다.
    protected $Colleague = [];

    // Colleague를 추가합니다.
    public function addColleague($obj)
    {
        array_push($this->Colleague, $obj);
    }

    // 동료를 생성합니다.
    abstract public function createColleague();
}