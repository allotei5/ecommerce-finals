<?php
require_once("../controllers/product_controller.php");
if(isset($_GET['id'])){
    $delete = delete_one_product($_GET['id']);
    if($delete){
        header("location: ../view/products.php");
    }else{
        echo "something went wrong";
    }
}

?>
