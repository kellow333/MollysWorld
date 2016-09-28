<?php

function CartQuantity() {

	global $cartCount;
	$cartCount = null;

    $cartCount = 0;
    if(isset($_SESSION['cart_array']) AND is_array(@$_SESSION['cart_array'])){
        foreach($_SESSION['cart_array'] AS $each_item){
            $cartCount = $cartCount + $each_item['quantity'];
        }
    }
}

?>