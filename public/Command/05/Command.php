<?php
// 명령 패턴: 인터페이스
interface Command
{
    // 실행 메서드
    public function execute();

    // 취소 명령
    public function undo();
}