<?php
const OPEN = 0x01; // 주문
const PAY = 0x02; // 결제중
const ORDERED = 0x03; // 주문완료

$state = null;

$state = OPEN;

if ($state == OPEN) {
    echo "주문\n";
} elseif ($state == PAY) {
    echo "결제중\n";
} elseif ($state == ORDERED) {
    echo "주문완료\n";
}