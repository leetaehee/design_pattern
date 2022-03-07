<?php
class Hello
{
    public function console(string $msg) : string
    {
        return $msg . "\n";
    }

    public function browser(string $msg) : string
    {
        return $msg . "<br/>";
    }
}

class Korean
{
    private $hello;
    public function __construct($hello)
    {
        // 의존성 주입
        $this->hello = $hello;
    }

    public function hello() : string
    {
        return $this->hello->browser("안녕하세요");
    }
}

class English
{
    private $hello;
    public function __construct($hello)
    {
        // 의존성 주입
        $this->hello = $hello;
    }

    public function hello() : string
    {
        return $this->hello->browser("hello");
    }
}

// 객체 할당1 <= 공유 객체
$hello = new Hello();

// 객체 할당2
$ko = new Korean($hello);
echo $ko->hello();

// 객체 할당3
$en = new English($hello);
echo $en->hello();

echo "\n 메모리 사용량 = " . memory_get_usage();