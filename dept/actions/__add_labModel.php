<?php
require_once '../bootstrap.php';
LogInCheck();
//only POST request is accepted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //print_r($_POST);


    //trim values from POST
    $lab_name = trim($_POST['lab_name']);
    $lab_details = trim($_POST['lab_details']);
    


    $i=1;
    //if password matches
    if($i=1)
    {
        //connect to db
        require_once '../db.php';
        $sql = "INSERT INTO `lab` (`lab_name`, `lab_details`, `added_at`) VALUES ('" . $lab_name . "',' " . $lab_details . "', CURDATE())";
        // var_dump($sql);

        //perform query
        $query = $conn->query($sql);
        $conn->close();

        if ($query == true) {
            //var_dump($query);
            $_SESSION['success'] = 'lab added successfully';
            header('location: ../lab.php');
        }
        else
         {
            $_SESSION['error'] = 'something went wrong';
            header('location: ../lab.php');
        }
    }
    
}
else {
    $_SESSION['error'] = 'Something went wrong while adding lab';
    header('location: ../lab.php');
}
