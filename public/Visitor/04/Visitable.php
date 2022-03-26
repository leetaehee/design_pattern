<?php
// 방문을 받아들이는 인터페이스
interface Visitable
{
    public function accept($visitor);
}