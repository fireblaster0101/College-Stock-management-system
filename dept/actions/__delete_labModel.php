<?php
require_once '../bootstrap.php';

/**
 * do not let anyone play with your URLs :>
 *
 */
LogInCheck();

if(isset($_GET['lab_id'])){
    require_once '../db.php';
    $sql = "DELETE FROM `lab` WHERE `lab_id` = '".$_GET['lab_id']."'";

    //use for MySQLi OOP
    if($conn->query($sql)){
        $_SESSION['success'] = 'lab deleted successfully';
    }
    else
    {
        $_SESSION['error'] = 'Something went wrong ';
    }
}
else{
    $_SESSION['error'] = 'Select lab to delete first';
}

header('location: ../lab.php');