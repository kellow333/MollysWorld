<?php

function ShoppingCart() {

    // Connect to mySQL
    include"sql_connect.php";

    //User tries to add to cart from product page 
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $product_found = false;
        $index = 0;
        
        // If cart session variable is not set or cart array is empty
        if(!isset($_SESSION["cart_array"])||count($_SESSION["cart_array"]) < 1){
            // Run if cart is empty or not set
            // Make array start with an index of 1
            $_SESSION["cart_array"] = array(0 => array("product_id" => $id, "quantity" => 1));
        }else{
            // Run if cart has 1 or more items in it
            foreach($_SESSION["cart_array"] as $each_product){
                $index ++;
                while(list($key, $value) = each($each_product)){
                    if($key == "product_id" && $value == $id){
                        // Item already in cart so adjust the quantity using array_splice()
                        array_splice($_SESSION["cart_array"], $index-1, 1, array(array("product_id" => $id, "quantity" => $each_product['quantity'] + 1)));
                        $product_found = true;  
                    } 
                } 
            } 
            if($product_found == false){
            array_push($_SESSION["cart_array"], array("product_id" => $id, "quantity" => 1));   
            }
        }
        header("location:cart.php");
        exit();
    }
    ?>

    <?php
    // If user adjusts quantity
    if(isset($_POST['adjust_quantity_id']) && $_POST['adjust_quantity_id']!= ""){
        $adjust_quantity_id = $_POST['adjust_quantity_id'];
        $quantity = $_POST['quantity'];
        $quantity = preg_replace('#[^0-9]#i','',$quantity);
        if($quantity < 1){$quantity = 1;}
        if($quantity == ""){$quantity = 1;}
        $index = 0;
        foreach($_SESSION["cart_array"] as $each_product){
                $index ++;
                while(list($key, $value) = each($each_product)){
                    if($key == "product_id" && $value == $adjust_quantity_id){
                        // Item already in cart so adjust the quantity using array_splice()
                        array_splice($_SESSION["cart_array"], $index-1, 1, array(array("product_id" => $adjust_quantity_id, "quantity" => $quantity)));
                    } // Close if condition
                } // Close while loop
            } // Close foreach loop
            header("location:cart.php");
            exit();
    }
    ?>

    <?php
    // If empty cart is selected
    if(isset($_GET['cmd']) && $_GET['cmd'] == "empty_cart"){
        unset($_SESSION["cart_array"]); 
    }
    ?>

    <?php
    // Remove item from cart
    if(isset($_POST['remove_id']) && $_POST['remove_id']!=""){
        $product_to_remove = $_POST['remove_id'];
            if(count($_SESSION["cart_array"]) <= 1){
            unset($_SESSION["cart_array"]); 
        }else{
            unset($_SESSION["cart_array"]["$product_to_remove"]);
            sort($_SESSION["cart_array"]);          
        }
    }
    ?>

    <?php
    // Render the cart
    global $cart_items;
    global $cart_total;

    $cart_items = "";
    $cart_total = 0;
    
    if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1){
        $cart_items = "<h2 align='center'>Your Shopping Cart Is Empty</h2>";    
    }else{
        $index = 0;
        foreach($_SESSION["cart_array"] as $each_product){
            
            $product_id = $each_product['product_id'];
            $result = $conn->prepare("SELECT*FROM workshop_products WHERE product_id='$product_id' LIMIT 1");
            $result->execute();

            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $product_id = $row["product_id"];
                $product_name = $row["product_name"];
                $product_price = $row["product_price"];
                $product_description = $row["product_description"]; 
            }
            $product_price_total = $product_price * $each_product['quantity'];
            $cart_total = $product_price_total + $cart_total;

            
            
            //Dynamic table
            $cart_items.= '<tr>';
            $cart_items.= '<td>'.'<img src="assets/store_images/'.$product_id.'.jpg" alt="'.$product_name.'" width="110" height="110"/></td>';
            $cart_items.= '<td>'.$product_name.'</td>';
            
            $cart_items.= '<td>£ '.$product_price.'</td>';
            $cart_items.= '<td><form action="cart.php" method="post">
            <input name="quantity" type="text" value="'.$each_product['quantity'].'" method="post"/>
            <button id="adjustQuantity" class="btn btn-small" name="adjust_quantity'.$product_id.'" type="submit">Change Qty</button>
            <input name="adjust_quantity_id" type="hidden" value="'.$product_id.'"/></form></td>';
            //$cart_items.= '<td>'.$each_product['quantity'].'</td>';
            $cart_items.= '<td>£ '.$product_price_total.'</td>';
            $cart_items.= '<td><form action="cart.php" method="post">
            <button id="removeItem" class="btn btn-small" name="cart_delete'.$product_id.'" type="submit">X Remove</button>
            <input name="remove_id" type="hidden" value="'.$index.'"/></form></td>';
            $cart_items.= '</tr>';
            $cart_items.= '<tr>';
            $cart_items.= '<td colspan="6">____________________________________________________________________________________________________________________________________'.'</td>';
            $cart_items.= '</tr>';
            $index ++;
            
            }
    }
}

?>