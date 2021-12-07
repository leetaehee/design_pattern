<?php
class Product1 implements Component
{
    // 상품 정보
    public function product()
    {
        return  "원피스";
    }

    // 가격을 반환합니다.
    public function price()
    {
        return 20000;
    }
}