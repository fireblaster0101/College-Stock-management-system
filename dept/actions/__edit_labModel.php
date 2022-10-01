<?php
    require_once '../bootstrap.php';
    //only POST request is accepted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //print_r($_POST);

        //trim the values
        $lab_id = $_POST['lab_id'];
        $lab_name = trim($_POST['lab_name']);
        $lab_details = trim($_POST['lab_details']);

        //connect to db
        require_once '../db.php';
        $sql = " UPDATE `lab` SET `lab_name` = '" .$lab_name. "', `lab_details` = '" .$lab_details. "' WHERE `lab`.`lab_id` = '" .$lab_id. "'";
        $query = $conn->query($sql);
        //var_dump($query);
        //var_dump($sql);

        if($query == true)
        {
            $_SESSION['success'] = 'lab updated successfully';
            //redirect to item home
            header('location: ../lab.php');
        }
        else
        {
            $_SESSION['error'] = 'Something went wrong while updating lab';
            //redirect to item home
            header('location: ../lab.php');
        }

    }
    else
    {
        $_SESSION['error'] = 'Something went wrong while updating item';
        header('location: ../lab.php');
    }
