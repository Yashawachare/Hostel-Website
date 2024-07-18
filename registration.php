<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
        Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Registration</h1>
    <div class=" w3l-login-form">
        <h2>Sign Up Here</h2>

        
        <form action="registration.php" method="POST">

            <div class=" w3l-form-group">
                <label>Aadhar Number:</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="aadhar" placeholder="" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Name as per Aadhar:</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="name" placeholder="" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Mobile Number:</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="mob" placeholder="" required="required" />
                </div>
            </div>
            
            <div class=" w3l-form-group">
                <label>Date of birth:</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="date" class="form-control" name="dob" placeholder="" required="required" />
                </div>
            </div>

            <div class="w3l-form-group">
                <label>Gender:</label>
                <div class="group">
                    <i class="fas fa-venus-mars"></i>
                    <select class="form-control" name="gender" required="required">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>


            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
            </div>
            
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>



        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; </p>
    </footer>


    <?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="hostel_db";
    
    $conn = mysqli_connect($servername,$username, $password,$db);
    if (!$conn) {
    die("Connection failed: "
        . mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
        $aadhar=$_POST['aadhar'];
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $mob=$_POST['mob'];
        $pass=$_POST['pass'];
        $gender=$_POST['gender'];

        $sql = "INSERT INTO details(aadhar,name,dob,gender,mob,pass) VALUES ('$aadhar', '$name', '$dob','$gender', '$mob','$pass')";

        if ($conn->query($sql) == TRUE) 
            {
            echo "New record created successfully";
            } 
        else 
            {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
        }
    
    ?>

</body>

</html>
