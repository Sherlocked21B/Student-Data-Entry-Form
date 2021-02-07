<?php
   include("Connection.php");
   error_reporting(0);
   session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathers_fname = $_POST['fathers_fname'];
    $fathers_lname = $_POST['fathers_lname'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];

    $_SESSION["recent_user"] = $fname;

    $query = "INSERT INTO STUDENTS VALUES ('$fname', '$lname','$fathers_fname','$fathers_lname','$gender','$birth_date','$address', '$city','$country','$pincode','$email','$phoneno','$password')";
    $data = mysqli_query($conn, $query);
        
    if($data){
        echo "Data inserted into database";
    }
    else{
        echo "There is error inseting the data";
        }
    }
?>