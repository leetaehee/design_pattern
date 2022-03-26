<?php
include "Product.php";
include "Cart.php";

$cart = new Cart("컵라면", 900, 2);
echo $cart->list();