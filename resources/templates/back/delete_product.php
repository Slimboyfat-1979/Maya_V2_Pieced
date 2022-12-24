<?php
//include_once ('../../config.php');
//include_once ('../../functions.php');

//include_once ('/xampp/htdocs/Maya_Pieced_V2/resources/functions.php');
//include_once ('/xampp/htdocs/Maya_Pieced_V2/resources/config.php');
//
//if(isset($_GET['id'])) {
//
//    echo "The id is ".$_GET['id'];


//    $query = query("DELETE FROM products WHERE product_id=".escape_string($_GET['id']));
//    set_message("Product Deleted");
//    redirect('../../admin/index.php?view_product');

//}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = query("DELETE FROM products WHERE product_id =".$id);
    confirm($query);
    redirect('admin/index.php?view_products');
}

?>

