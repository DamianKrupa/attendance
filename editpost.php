<?php 

require_once 'db/conn.php'; 


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $speciality = $_POST['speciality'];

    $result = $crud->edditAttendees($id, $fname, $lname, $dob, $email, $phone, $speciality);
    if($result){
        header("Location: viewrecords.php");
        include "includes/successmessage.php";
    }
    else{
        include "includes/errormessage.php";
    }
}
else{
    include "includes/errormessage.php";
}

?>