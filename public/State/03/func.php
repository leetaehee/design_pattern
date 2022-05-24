<?php
$state = "ordered";

if ($state && function_exists($state)) {
    $state();
}

// 오픈상태
function open()
{
    echo "주문\n";
}

// 결제상태
function pay()
{
    echo "결제증\n";
}

// 주문상태
function ordered()
{
    echo "주문완료\n";
}

// 완료 상태
function finish()
{
    echo "처리완료\n";
}