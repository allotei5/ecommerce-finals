<?php
//connect to database class
include_once (dirname(__FILE__)).'/../settings/db_class.php';

/**
*User class to handle everything customer related
*/
/**
 *@author Allotei Pappoe
 *
 */

class user_class extends db_connection
{
    public function register_new_user($username, $email, $password, $country, $city, $street_name, $contact){
        $sql = "INSERT INTO `users`(`username`, `email`, `password`, `country`, `city`, `street_name`, `contact`, `user_role`) VALUES ('$username', '$email', '$password', '$country', '$city', '$street_name', '$contact', 3)";

        return $this->db_query($sql);
    }

    public function check_for_user($email){
        $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        return $this->db_query($sql);
    }


}

?>
