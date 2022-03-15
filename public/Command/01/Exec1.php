<?php
// 명령 객체
class Exec1 implements Command
{
    public function __construct()
    {
        echo __CLASS__ . " 객체를 생성합니다. \n";
    }

    // 인터페이스 적용
    // 실행 메서드 구현
    public function execute()
    {
        echo "명령1을 실행합니다.\n";
        // 추가 코드 작성
    }
}