<?php

class ProductFactory extends Factory
{
    public function __construct()
    {
        echo __CLASS__ . '를 생성합니다. \n';
    }


    public function createProduct()
    {
        // 추상 메서드 오버라이딩
        return new LgProduct();
    }
}