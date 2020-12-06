<?php
//connect to database class
include_once (dirname(__FILE__)).'/../settings/db_class.php';

/**
*Product class to handle everything product related
*/
/**
 *@author Allotei Pappoe
 *
 */

class cart_class extends db_connection
{
    public function add_to_cart_log($product_id, $customer_id, $ip_add, $qty){
        $sql = "INSERT INTO `cart`(`product_id`, `customer_id`, `ip_add`, `qty`) VALUES ('$product_id', '$customer_id', '$ip_add', '$qty')";
        return $this->db_query($sql);
    }

    public function add_to_cart_nlog($product_id, $ip_add, $qty){
        $sql = "INSERT INTO `cart`(`product_id`, `ip_add`, `qty`) VALUES ('$product_id', '$ip_add', '$qty')";
        return $this->db_query($sql);
    }

    public function check_duplicate_log($product_id, $customer_id){
        $sql = "SELECT `product_id`, `customer_id` FROM `cart` WHERE `product_id` = '$product_id' AND `customer_id` = '$customer_id'";
        return $this->db_query($sql);
    }

    public function check_duplicate_nlog($product_id, $ip_add){
        $sql = "SELECT `product_id`, `ip_add` FROM `cart` WHERE `product_id` = '$product_id' AND `ip_add` = '$ip_add'";
        return $this->db_query($sql);
    }

    public function get_stock($product_id){
        $sql = "SELECT `stock` FROM `products` WHERE `id`='$product_id'";
        return $this->db_query($sql);
    }

    public function view_cart($customer_id){
        $sql = "SELECT `cart`.`product_id`, `cart`.`customer_id`, `cart`.`qty`, `products`.`product_name`, `products`.`product_img`, `products`.`product_price` FROM `cart` JOIN `products` ON (`cart`.`product_id` = `products`.`id`) WHERE `cart`.`customer_id` = '$customer_id'";
        return $this->db_query($sql);
    }

    public function view_cart_nlog($ip_add){
        $sql = "SELECT `cart`.`product_id`, `cart`.`ip_add`, `cart`.`qty`, `products`.`product_name`, `products`.`product_img`,`products`.`product_price` FROM `cart` JOIN `products` ON (`cart`.`product_id` = `products`.`id`) WHERE `cart`.`ip_add` = '$ip_add'";
        return $this->db_query($sql);
    }

    public function update_stock($product_id, $r_qty){
        $sql = "UPDATE `products` SET `stock`='$r_qty' WHERE `product_id`='$product_id'";
        return $this->db_query($sql);
    }

    public function update_cart_item_qty($product_id, $customer_id, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `product_id`='$product_id' AND `customer_id`='$customer_id'";
        return $this->db_query($sql);
    }

    public function update_cart_item_qty_nlog($product_id, $ip_add, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `product_id`='$product_id' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }

    public function delete_cart_item($product_id, $customer_id){
        $sql = "DELETE FROM `cart` WHERE `product_id`='$product_id' AND `customer_id`='$customer_id'";
        return $this->db_query($sql);
    }

    public function delete_cart_item_nlog($product_id, $ip_add){
        $sql = "DELETE FROM `cart` WHERE `product_id`='$product_id' AND `ip_add`='$ip_add'";
        return $this->db_query($sql);
    }



}


?>
