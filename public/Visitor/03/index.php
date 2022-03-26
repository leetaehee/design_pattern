<?php
include "Visitable.php";

include "Product.php";
include "Cart.php";

include "Visitor.php";
include "Visitant.php";

$cart = new Cart("컵라면", 900, 2);
//echo $cart->list();

echo $cart->accept(new Visitant());