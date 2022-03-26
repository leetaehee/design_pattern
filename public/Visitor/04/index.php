<?php
include "Visitable.php";

include "Product.php";
include "Cart.php";

include "Visitor.php";
include "Visitant.php";

echo "쇼피몽 상품 주문 처리\n";
echo "----\n";

// 공동된 방문자 객체
$visitant = new Visitant();

// 방문객이 방문지를 하나씩
$list = [
    new Cart("컵라면", 900, 3),
    new Cart("아이스크림", 1500, 1),
    new Cart("음료수", 2800, 1),
];

foreach ($list as $obj) echo $obj->accept($visitant);

echo "\n-----\n";
echo "감사합니다. 주문건수:".$visitant->getNum()."\n";
echo "주문 합계:" .  $visitant->getTotal() . " 입니다.";