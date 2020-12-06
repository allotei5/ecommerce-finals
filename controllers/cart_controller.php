<?php
//require customer class
include_once (dirname(__FILE__)).'/../classes/cart_class.php';

function add_to_cart_fxn($product_id, $customer_id, $ip_add, $qty){
    $cart_object = new cart_class;

    $run_query = $cart_object->add_to_cart_log($product_id, $customer_id, $ip_add, $qty);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function add_to_cart_nlog($product_id, $ip_add, $qty){
    $cart_object = new cart_class;

    $run_query = $cart_object->add_to_cart_nlog($product_id, $ip_add, $qty);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function check_duplicate_log($product_id, $customer_id){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->check_duplicate_log($product_id, $customer_id);
    if($run_query){
        $record = $new_cart_object->db_fetch();
        if(!empty($record['product_id']) && !empty($record['customer_id'])){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function check_duplicate_nlog($product_id, $ip_add){
    $new_cart_object = new cart_class();

    $run_query = $new_cart_object->check_duplicate_nlog($product_id, $ip_add);
    if($run_query){
        $record = $new_cart_object->db_fetch();
        if(!empty($record['product_id']) && !empty($record['ip_add'])){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function get_stock($product_id){
    $new_cart_object = new cart_class();
    $run_query = $new_cart_object->get_stock($product_id);
    if($run_query){
        $stock = $new_cart_object->db_fetch();
        return $stock;
    }else{
        return false;
    }
}

function view_cart($customer_id){
    $new_cart_object = new cart_class();
    $run_query = $new_cart_object->view_cart($customer_id);
    if($run_query){
        $cart_arr = array();
        while($record = $new_cart_object->db_fetch()){
            $cart_arr[] = $record;

        }
        return $cart_arr;
    }else{
        return false;
    }
}

function view_cart_nlog($ip_add){
    $new_cart_object = new cart_class();
    $run_query = $new_cart_object->view_cart_nlog($ip_add);
    if($run_query){
        $cart_arr = array();
        while($record = $new_cart_object->db_fetch()){
            $cart_arr[] = $record;

        }
        return $cart_arr;
    }else{
        return false;
    }
}

function update_cart_item_qty($product_id, $customer_id, $qty){
    $cart_object = new cart_class;

    $run_query = $cart_object->update_cart_item_qty($product_id, $customer_id, $qty);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function update_cart_item_qty_nlog($product_id, $ip_add, $qty){
    $cart_object = new cart_class;

    $run_query = $cart_object->update_cart_item_qty_nlog($product_id, $ip_add, $qty);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_cart_item($product_id, $customer_id){
    $cart_object = new cart_class;

    $run_query = $cart_object->delete_cart_item($product_id, $customer_id);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}

function delete_cart_item_nlog($product_id, $ip_add){
    $cart_object = new cart_class;

    $run_query = $cart_object->delete_cart_item_nlog($product_id, $ip_add);

    if($run_query){
        return $run_query;
    }else{
        return false;
    }
}


?>
