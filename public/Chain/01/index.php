<?php
$conf = true;

if ($conf) {
    // 조건이 참인 경우 코드 분기
    ordered();
} else {
    // 조건이 거짓인 경우 코드 분기
    cancel();
}

function ordered()
{
    echo " 주문이 성공적으로 접수되었습니다.";
}

function cancel()
{
    echo "주문을 취소합니다.";
}