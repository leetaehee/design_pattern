<?php

abstract class Builder
{
    protected $algorism;

    public function setAlgorism(Algorism $algorism)
    {
        echo '빌드 객체를 저장합니다 <= ' . get_class($algorism) . '\n';

        $this->algorism = $algorism;

        return $this;
    }

    public function getInstance()
    {
        return $this->algorism->getInstance();
    }

    abstract public function build();
}