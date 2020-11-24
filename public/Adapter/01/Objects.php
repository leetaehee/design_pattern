<?php

class Objects implements Adapter
{
    private $_adapter;

    public function __construct()
    {
        $this->_adapter = new Math();
    }

    public function twiceOf(int $num): int
    {
        echo '정수 2배 적용합니다. \n';

        $_num = $this->_adapter->twoTime( (float)$num );

        return (int)$_num;
    }

    public function halfOf(int $num): int
    {
        echo '정수 1/2배 적용합니다.\n';

        $_num = $this->_adapter->halfTime( (float)$num );

        return (int)$_num;
    }
}