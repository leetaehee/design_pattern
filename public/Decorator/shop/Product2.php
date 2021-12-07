<?php
class Product2 implements Component
{
    // 상품정보
    public function product()
    {
        return "블라우스";
    }

    // 가격을 반환합니다
    public function price()
    {
        return 25000;
    }
}