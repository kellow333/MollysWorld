<?php
//Error reporting
error_reporting(E_ALL);
ini_set('display_errors','1');
?>

<?php

function DisplayProducts() {
    // Takes product list for viewing
    global $workshop_products;
    $workshop_products = "";
    $order = "";

    if (!empty($_GET['sort']) && $_GET['sort'] == 'PriceAsc'){
        $order = "ORDER BY product_price ASC";
    }

    if (!empty($_GET['sort']) && $_GET['sort'] == 'PriceDesc'){
        $order = "ORDER BY product_price DESC";
    }

    include"sql_connect.php";

    $result = $conn->prepare("SELECT * FROM workshop_products WHERE product_category='workshop'".$order);
    $result->execute();

    $product_count = $result->rowCount();

    if($product_count > 0){
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $id = $row["product_id"];
            $product_name = $row["product_name"];
            $product_description = $row["product_description"];
            $product_price = $row["product_price"];
            $product_category = $row["product_category"];
                
    $workshop_products .=
    '<table class="workshopProducts">
        <tr>
            <th rowspan="4"><a href="product.php?id='.$id.'"><img src="assets/store_images/'.$id.'.jpg" alt="'.$product_name.'" width="150" height="150" border="1"/></a></th>
            <th id="productName" rowspan="4"><p>'.$product_name.'</p></th>
            <th id="productDescription" colspan="2"><p>'.$product_description.'</p></th>
        </tr>
        <tr>
            <td id="productPrice" colspan="2"><p>'.$product_price.'</p></td>
        </tr>
        <tr>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2"> 
                <p><a href="product.php?id='.$id.'">View Product</a></p>
            </td>
        </tr>
    </table>';
        }
    }else{
        $workshop_products = "No products listed in store";
    }
    $conn = NULL;
}
?>