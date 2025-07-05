<?php

include 'config.php';

$insert = false;
$email_exists = false;

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phno']) && isset($_POST['password'])) {

    // For user inputs in each field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $password = $_POST['password'];

    // Check if email already exists
    $dup_email = mysqli_query($con, "SELECT * FROM `union`.`signupform` WHERE email = '$email'");

    if (mysqli_num_rows($dup_email)) {
        // If email already exists
        $email_exists = true;
        $insert = false;
        echo "<script>alert('Email already exists')</script>";
    } else {
        // Insert new user into signupform table
        $sql = "INSERT INTO `union`.`signupform` (`name`, `email`, `phno`, `password`) 
                VALUES ('$name', '$email', '$phno', '$password')";
        
        // Execute query and check if insertion was successful
        if (mysqli_query($con, $sql)) {
            $insert = true;
            echo "<script>alert('User registered successfully')</script>";
        } else {
            echo "ERROR: $sql <br> $con->error";
        }
    }
}

?>
