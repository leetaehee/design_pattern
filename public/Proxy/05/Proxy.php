<?php
// 프록시 객체
class Proxy implements Subject
{
    private $_object;

    public function __construct($real)
    {
        echo __CLASS__ . " 객체가 생성이 되었습니다.\n\n";
        $this->_object = $real;
    }

    public function action1()
    {
        echo __METHOD__ . "을(를) 호출합니다.\n";
        // 행위를 가로챕니다. 실체 객체로 위임합니다.
        $this->_object->action1();
    }

    public function action2()
    {
        echo __METHOD__ . "을(를) 호출합니다.\n";
        // 행위를 가로챕니다. 실체 객체로 위임합니다.
        $this->_object->action2();
    }

    public function __call($method, $args)
    {
        if (method_exists($this->_object, $method)) {
            $this->_object->$method($args);
        } else {
            print $method . "는 실제 존재하는 메서드가 아닙니다.\n";
            var_dump($args);
        }
    }
}