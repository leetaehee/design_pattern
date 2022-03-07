<?php
// 유사 기능 분리
class Hello
{
    public function console($msg)
    {
        return $msg . "\n"; // 콘솔 출력 시
    }

    public function brower($msg)
    {
        return $msg . "<br/>"; // 브라우저 출력 시
    }
}

// 상속으로 재사용
class Korean extends Hello
{
    public function hello()
    {
        return $this->console("안녕하세요");
    }
}

class English extends Hello
{
    public function hello()
    {
        return $this->console("hello");
    }
}

$ko = new Korean();
echo $ko->hello();
$en = new English();
echo $en->hello();