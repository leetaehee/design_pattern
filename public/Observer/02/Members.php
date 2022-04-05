<?php
// 실제적 주체 구현
class Members implements Subject
{
    // 감시자 보관
    private $Objs = [];

    public function __construct()
    {
        echo __CLASS__ . " 실제 주체(constructSubject)를 생성합니다.\n";
    }

    // 감시자를 등록합니다.
    public function addObserver(Observer $o)
    {
        echo "감시자 객체를 추가합니다.\n";
        array_push($this->Objs, $o);
    }

    // 감시자를 제거합니다.
    public function delelteObserver(Observer $o)
    {
        for ($i = 0; $i < count($this->Objs); $i++) {
            if ($this->Objs[$i]->name == $o->name) {
                unset($this->Objs[$i]);
            }
        }
    }

    // 모든 감시자에게 통보합니다.
    public function notiObserver()
    {
        foreach ($this->Objs as $obj) {
            echo "감시자=> ";
            $obj->update();
        }
    }
}