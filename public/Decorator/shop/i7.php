<?php
// ConcreateDecorator
class i7 extends Decorate
{
    public $base; // 내부 참조자
    public function __construct($concrete)
    {
        echo __CLASS__ . "가 생성 되었습니다.\n";
        $this->base = $concrete;
    }

    // 상품정보
    public function product()
    {
        return $this->base->product() . ",i7";
    }

    // 가격정보
    public function price()
    {
        return $this->base->price() + 47500;
    }
}