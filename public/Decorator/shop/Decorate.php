<?php
abstract class Decorate implements Component
{
    // 상품 정보
    abstract public function product();

    // 가격 정보
    abstract public function price();
}