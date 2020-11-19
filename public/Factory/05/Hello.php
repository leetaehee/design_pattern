<?php
class Hello
{
    public function greeting($type)
    {
        // 팩토리
        //$ko = Factory::getInstance($type);
        //return $ko->text();

        // 단순팩토리
        $ko = self::factory();
        return $ko->text();
    }

    // 단순 팩토리
    public static function factory()
    {
        return new Korean();
    }
}