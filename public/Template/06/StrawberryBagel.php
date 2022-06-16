<?php
// 공통되지 않은 부분
class StrawberryBagel extends SandWich
{
    // 추상 메서드 : 구현
    protected function bread()
    {
        return "베이글";
    }

    // 추상 메서드 : 구현
    protected function jam()
    {
        return "딸기잼";
    }
}