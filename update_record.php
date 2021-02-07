
<?php
include("Connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student registration form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="style.css">

    <style>
    @media screen and (max-width: 992px) {
  .container {
    width: calc(100% - 40px);
    max-width: 100%; }

  .signup-content {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column; }

  .signup-img, .signup-form {
    width: 100%; } }

@media screen and (max-width: 768px) {
  .register-form {
    padding: 50px 40px 50px 40px; } }
@media screen and (max-width: 575px) {
  .form-row {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column;
    margin: 0px; }

  .form-row .form-group {
    width: 100%;
    padding: 0px; }

  .radio-label {
    padding-right: 22px; }

  .form-radio-item {
    margin-right: 25px; } }
@media screen and (max-width: 480px) {
  .form-radio {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column; }

  .submit {
    width: 100%; }
  }
    </style>
</head>
<body>
     <!--Navbar -->
     <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Student Data Entry Form </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link text-grey" href="./index.html">Student Data Entry form </a>
                    <a class="nav-link text-grey" href="./view_records.php">View Records</a>
                </div>
            </div>
        </div>
        </nav>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="" name = "register-form" class="register-form" id="register-form" style = "background-color: blueviolet;" onsubmit="return validateform()" />
                        <h2>Student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fname">First Name :</label>
                                <input type="text" name="fname" id="fname" maxlength="25"  value="<?php echo $_GET['fn'] ?>" autofocus required/>
                                <label for="lname">Last Name :</label>
                                <input type="text" name="lname" id="lname" maxlength="25" value="<?php echo $_GET['ln'] ?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="fatherfirst_name">Father's First Name :</label>
                                <input type="text" name="fathers_fname" id="fathers_fname" maxlength="25" value="<?php echo $_GET['ffn'] ?>" required/>
                                <label for="fatherLastName">Father's Last Name:</label>
                                <input type="text" name="fathers_lname" id="fathers_lname" maxlength="25" value="<?php echo $_GET['fln'] ?>" required/>
                            </div>
                        </div>

                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                            	<input type="radio" name="gender" id="others" value="others">
                            	<label for="others">Others</label>
                            	<span class="check"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" value="<?php echo $_GET['db'] ?>" id="birth_date" min="01-01-1984" max="01-01-2013"/>
                        </div>

                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" value="<?php echo $_GET['ad'] ?>" maxlength="50" required/>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="country">Country :</label>
                                <div class="form-select">
                                    <select name="country" id="state">
                                    	<option value=NULL> </option>
                                    	<option value="Nepal">Nepal</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Sirlanka">Sirlanka</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Australia">Australia</option>
                                        <option value="America">America</option>                                       
                                        <option value="Norway">Norway</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Swizerland">Swizerland</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="City">City :</label>
                                <input type="text" name="city" id="city" value="<?php echo $_GET['ct'] ?>" minlength="3" maxlength="20" required/>
                            </div>                          
                        </div>

                        <div class="form-group">
                            <label for="pincode">Pincode :</label>
                            <input type="number" name="pincode" id="pincode" value="<?php echo $_GET['pc'] ?>" min="100000" max="999999"/>
                        </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" value="<?php echo $_GET['em'] ?>" />
                        </div>

                        <div class="form-group">
                        	<label for="phoneno">Contact Number: </label>
                        	<input type="text" name="phoneno" id="phoneno" value="<?php echo $_GET['ph'] ?>" maxlength="10"  pattern="\d{10}"/>
                        </div>
                    </div>

                   
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Create New Password :</label>
                                <input type="password" name="password" id="password" value="<?php echo $_GET['pw'] ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder = "Password" required/>
                        </div>                       

                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password:</label>
                            	<input type="password" name="confirmPassword" id="confirmPassword" placeholder = "Confirm Password" required/>
                        </div>

                    </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php

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

    $query = " UPDATE `STUDENTS` SET `First Name`='$fname', `Last Name`='$lname', `Fathers First Name`='$fathers_fname',
    `Fathers Last Name`='$fathers_lname', `Gender` ='$gender' , `BIrth date`='$birth_date',`Addresss`='$address',
    `city`='$city',`Country`='$country',`pincode`='$pincode', `email` = '$email', `phoneno`='$phoneno', `password` ='$password'
    WHERE `phoneno` ='$phoneno' ";

    $data = mysqli_query($conn, $query);

    if($data){
        echo "updated successfully";
    }
    else{
        echo "record not updated";
    }
    }
    else{
        echo "not pressed";
    }
?>

    <!-- JS -->
 <script src="my_script.js"></script>
</body>
</html>