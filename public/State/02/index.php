<?php
const OPEN = 0x01; // 주문
const PAY = 0x02; // 결제중
const ORDERED = 0x04; // 주문완료
const FINISH = 0x08; // 처리완료

$state = NULL;
$state = PAY;

if ($state == OPEN) {
    echo "주문\n";
} elseif ($state == PAY) {
    echo "결제중\n";
} elseif ($state == ORDERED) {
    echo "주문완료\n";
} elseif ($state == FINISH) {
    echo "처리완료\n";
}