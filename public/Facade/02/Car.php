<?php
class Car
{
    // 클래스의 구성 요소
    // 구성 요소의 메서드는 호출해도 된다
    private $engine;

    public function __construct($eng)
    {
        $this->engine = $eng;
    }

    public function start($key)
    {
        // 새로운 객체 생성
        // 내부에서 생성된 객체의 메서드는 호출해도 된다
        $doors = new Doors();

        // 매개변수로 전달된 객체의 메서드는 호출해도 된다
        $authorized = $key.turns();

        if ($authorized) {
            // 객체의 구성 요소ㅗ의 메서드는 호출해도 된다
            //$engine->start();

            // 객체 내에 있는 메서드는 호출해도 된다.
            $this->updateDashboardDisplay();

            // 직접 생성하거나 인스턴스를 만든 객체의 메서드는 호출해도 된다.
            $doors->lock();
        }
    }

    public function updateDashboardDisplay()
    {
        // 생략
    }
}