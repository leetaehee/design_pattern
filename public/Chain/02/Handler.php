<?php
// 클래스 선언
class Handler
{
    public function event($message)
    {
        if ($message == 'action01') {
            return "버튼 동작 01입니다."; // 책임 동작1
        } else if ($message == 'action02') {
            return "버튼 동작 02입니다."; // 책임 동작2
        } else if ($message == 'action03') {
            return "버튼 동작 03입니다."; // 책임 동작3
        }

        return "동작이 없습니다.";
    }
}

// 객체 생성
$obj = new Handler();

// 이벤트를 실행
echo $obj->event("action02");