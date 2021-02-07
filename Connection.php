<?php
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = 'student_data_entry_form';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    echo "connection is made";
}
else{
    die("connection failed because ".mysqli_connect_error());
}

?>