<?php

abstract class Factory
{
    public final function create($model)
    {
        return $this->createProduct($model);
    }

    // 추상 메서드 선언
    abstract public function createProduct($model);
}