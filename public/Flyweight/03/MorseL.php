<?php
class MorseL implements flyweight
{
    public function __construct()
    {
        echo __CLASS__ . "을(를) 생성하였습니다. \n";
    }

    public function code()
    {
        echo "*";
        echo "-";
        echo "*";
        echo "*";

        echo " ";
    }
}