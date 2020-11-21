<?php

class ProductFactory extends Factory
{
    public function __construct()
    {
        echo __CLASS__ . '를 생성합니다. \n';
    }

    public function createProduct($model)
    {
        if ($model === 'LG') {
            return new LgProduct();
        } else if ($model === 'SAMSUNG') {
            return new SamsungProduct();
        }
    }
}