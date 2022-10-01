<?php
require_once '../bootstrap.php';

/**
 * do not let anyone play with your URLs :>
 *
 */
LogInCheck();

if(isset($_GET['item_id'])){
    require_once '../db.php';
    $sql = "DELETE FROM `item` WHERE `item_id` = '".$_GET['item_id']."'";
    $query = $conn->query($sql);
    //use for MySQLi OOP
    if($query == true){
        $sql1 = "DELETE FROM `stock` WHERE `item_id` = '".$_GET['item_id']."'";
        $query = $conn->query($sql1);
        if($query == true){
        $_SESSION['success'] = 'Item deleted successfully';
    }}
    else
    {
        $_SESSION['error'] = 'Something went wrong in deleting member query';
    }
}
else{
    $_SESSION['error'] = 'Select member to delete first';
}

header('location: ../items.php');