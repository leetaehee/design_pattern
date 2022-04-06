<?php
abstract class Colleague
{
    protected $Mediator;

    // 즁갸 갹채를 설정합니다.
    // concreateMediator에 의해 호출됩니다.
    public function setMediator($mediator)
    {
        $this->Mediator = $mediator;
    }
}