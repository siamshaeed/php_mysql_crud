<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    extract($_POST);
    require_once("../db_config.php");
    
   $sql = "INSERT INTO  product_info (product_name, product_code, product_price, producr_quantity) values ('$product_name', '$product_code', '$product_price', '$producr_quantity')";
    $db->query($sql);
     
    if($db->affected_rows>0){
        header("Location: ../product.php");
    }
}
?>