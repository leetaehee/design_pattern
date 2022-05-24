<?php
// 객체를 구현합니다.
class LightLamp implements LightState
{
    // private 속성을 이용하여
    // 외부에서 상태에 직접 접근할 수 없도록 정의합니다.
    private $_lightstate;

    public function __construct()
    {
        echo __CLASS__ . " 객체를 생성합니다.\n";
        // 전구의 초기 상태는 off 입니다.
        $this->_lightstate = FALSE;
    }

    // 전구(LED)를 on 합니다.
    public function lightOn()
    {
        echo "전구를 on 합니다.\n";
        $this->_lightstate = TRUE;
        return $this;
    }

    // 전구(LED)를 off 합니다.
    public function lightOff()
    {
        echo "전구를 off 합니다.\n";
        $this->_lightstate = FALSE;
        return $this;
    }

    // 전구(LED)의 상태값을 반환합니다.
    public function lightState()
    {
        return $this->_lightstate;
    }
}