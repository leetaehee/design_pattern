<?php
class SandWich
{
    public function make()
    {
        // 1단계 : 빵을 하나 준비합니다.
        $food = "빵";

        // 2단계 : 준비된 빵에 속재료를 올려놓습니다.
        $food .= " + ";
        $food .= "속재료";

        // 3단계 : 속재료 위에 다시 빵 하나를 놓습니다.
        $food .= " + ";
        $food .= "빵";

        // 생성된 샌드위치를 반환합니다.
        return $food;
    }
}