<?php

include("Connection.php");
$phoneno = $_GET['ph'];
$query = "DELETE FROM STUDENTS WHERE `phoneno` = '$phoneno'";
$data = mysqli_query($conn, $query);
if($data){
    ?><script>alert('Record Deleted')</script><?php;
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/student_data_entry_form_web_technology/index.html">
    <?php
}
else{
    echo "Oops! an error occured";
}

?>