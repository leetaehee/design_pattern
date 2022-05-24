<?php
class JinyOrder
{
    private $state;

    // 객체 초기화
    public function __construct()
    {
        // 상태의 서브 클래스 객체의 인스턴스를 생성합니다.
        $this->state = [
            'ORDER' => new StateOrder(),
            'PAY' => new StatePAY(),
            'ORDERED' => new StateOrdered(),
            'FINISH' => new StateFinish(),
        ];
    }

    // 상태의 서브 클래스를 호출합니다.
    public function process($status)
    {
        $this->state[$status]->process();
    }
}