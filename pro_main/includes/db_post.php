<?php
require 'includes/db_conn.php';

if(isset($_POST["submit"])){

    $user_name = "seyam";
    $item_type = $_POST["item"];
    $location = $_POST["location"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    $image = '';


    $sql = "INSERT INTO Found_items(user_name , item_type, location,	discription, f_date, image   ) values($user_name $item_type, $location, $description, $date, $image )";
    //, item_type, location,	discription, f_date, image   
    // , $item_type, $location, $description, $date, $image 
    $result= mysqli_query($conn, $sql);
    if($result){
        echo"inserted";
    }
    else{
        echo"not";
    }
}