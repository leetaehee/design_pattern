<?php
// 명령 패턴
class Invoker
{
    public $cmd = [];

    // 명령 객체를 저장합니다.
    public function setCommand($key, $command)
    {
        $this->cmd[$key] = $command;
    }

    // 명령 객체를 삭제합니다.
    public function remove($key)
    {
        unset($this->cmd[$key]);
    }

    // 명령 객체를 실행합니다.
    public function execute($key)
    {
        if (isset($this->cmd[$key])) {
            $this->cmd[$key]->execute();
        }
    }
}