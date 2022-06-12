<?php
class Hello
{
    private string $message;

    public function __construct(string $msg)
    {
        $this->message = $msg;
    }

    public function setMessage($msg) : void
    {
        $this->message = $msg;
    }

    public function getMessage() : string
    {
        return $this->message;
    }
}