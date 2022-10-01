<?php
require_once '../bootstrap.php';
//only POST request is accepted
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //print_r($_POST);

    //trim the values
    $item_id = $_POST['item_id'];
    $lab_id = $_POST['lab_id'];
    

    //connect to db
    require_once '../db.php';
    $sql = " UPDATE `item` SET `item`.`lab_id` = '" . $lab_id . "' WHERE `item`.`item_id` = '" .$item_id. "'";
    $query = $conn->query($sql);
    //var_dump($query);
    //var_dump($sql);
    

    if($query == true)
    {
        $_SESSION['success'] = 'item allocated successfully';

    }

    else
    {
        $_SESSION['error'] = 'Something went wrong while allocating item';
    }

    //redirect to item home
    header('location: ../allocate_lab.php');




}
else
{
    $_SESSION['error'] = 'Something went wrong while allocating item';
    header('location: ../allocate_lab.php');
}