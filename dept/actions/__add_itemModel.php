<?php
require_once '../bootstrap.php';
LogInCheck();
//only POST request is accepted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //print_r($_POST);
    //trim values from POST
    $item_id = $_POST['item_id'];
    $stock_id = $_POST['stock_id'];
    $item_name = trim($_POST['item']);
    $item_detail = trim($_POST['details']);
    $bill_no = trim($_POST['bill_no']);
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];
    $supplier_id = $_POST['supplierName'];

    //connect to db
    require_once '../db.php';
    $sql =("INSERT INTO `item` (`item_id`,`item_name`, `item_detail`, `bill_no`, `supplier_id`, `supplied_at`) VALUES ('" . $item_id . "','" . $item_name . "','" . $item_detail . "','" . $bill_no . "','" . $supplier_id . "' , CURDATE()) ");
     
    $query = $conn->query($sql);
    
   

    if($query == true){
        $sql2=("INSERT INTO `stock` (`item_id`,`quantity`,`total_price`) VALUES ('" . $item_id . "','" . $quantity . "','" . $total_price . "')" );
        
        $query = $conn->query($sql2);
    //$conn->close();
    
        var_dump($query);
        $_SESSION['success'] = 'item added successfully';
        //header('location: ../items.php');
    }
    else
    {
        $_SESSION['error'] = 'something went wrong';
        //header('location: ../items.php');
    }


    
    
    }

else {
    $_SESSION['error'] = 'Something went wrong while adding items';
    //header('location: ../items.php');
    }

header('location: ../items.php');



