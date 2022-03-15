<?php
// 명령 객체
class Exec2 implements Command
{
    private $Receiver;

    public function __construct($receiver)
    {
        echo __CLASS__ . " 객체를 생성합니다.";
        // 실제 객체 의존성 주입
        $this->Receiver = $receiver;
    }

    // 인터페이스 적용
    // 실행 메서드 구현
    public function execute()
    {
        echo "명령2를 실행합니다.\n";

        // 여러 개의 리시버 동작을 처리할 수 있습니다.
        // 실체 객체의 명령을 수행합니다.
        $this->Receiver->action1();
        $this->Receiver->action2();

        // 추가 코드 작성

    }
}