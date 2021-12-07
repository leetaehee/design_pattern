<?php
// ConcreateDecorator
class ssd256 extends Decorate
{
    public $base; // 내부 참조ㅗ자
    public function __construct($concrete)
    {
        echo __CLASS__ . "가 생성이 되었습니다.\n";
        $this->base = $concrete;
    }

    // 상품 정보
    public function product()
    {
        return $this->base->product() . ",ssd256";
    }

    // 가격 정보
    public function price()
    {
        return $this->base->price() + 110000;
    }
}