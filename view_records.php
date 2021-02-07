<html>
    <head>
        <title>Student data entry form</form> </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <style>
            td{
                padding:20px;
            }
        </style>
    </head>

    <body>

    <!--Navbar -->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Student Data Entry Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link text-grey" href="./index.html">Create Entry </a>
                <a class="nav-link text-grey" href="./view_records.php">View List</a>
            </div>
        </div>
    </div>
    </nav>

    <h1>View list</h1>

    <?php
include("Connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENTS";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0){

    ?>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Fathers First_Name</th>
                <th>Fathers Last_Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>PinCode</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        
    <?php

    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$result['First Name']."</td>
        <td>".$result['Last Name']."</td>
        <td>".$result['Fathers First Name']."</td>
        <td>".$result['Fathers Last Name']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['BIrth date']."</td>
        <td>".$result['Addresss']."</td>
        <td>".$result['city']."</td>
        <td>".$result['Country']."</td>
        <td>".$result['pincode']."</td>
        <td>".$result['phoneno']."</td>
        <td>".$result['email']."</td>
        <td>".$result['password']."</td>

        <td><a href=update_record.php?fn=",urlencode($result['First Name']),"&ln=",
        urlencode($result['Last Name']),"&ffn=",urlencode($result['Fathers First Name']),"&fln=",
        urlencode($result['Fathers Last Name']),"&gn=",urlencode($result['Gender']),"&db=",
        urlencode($result['BIrth date']),"&ad=",urlencode($result['Addresss']),
        "&ct=",urlencode($result['city']),"&cu=",urlencode($result['Country']),
        "&pc=",urlencode($result['pincode']),"&em=",urlencode($result['email']),
        "&ph=",urlencode($result['phoneno']),"&pw=",urlencode($result['password']),">Edit</a></td>

        <td><a href=delete_records.php?ph=",urlencode($result['phoneno']),">Delete</a></td>
    </tr>
        "
        ;
    }
}
else{
    echo "Table has no records";
}

?>
    </table>
        
    </body>
</html>