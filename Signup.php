<?php

$conn = mysqli_connect("localhost","root","","online_atms") or die("Connection Failed!");
// if($conn)
// {
//     echo("connection ok");

// }
// else{
//     echo("connection error");
// }
{
    if (isset($_POST['submit'])){

        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $C_Password = $_POST['C_Password'];
        $query = "INSERT INTO `user1`(`User_Email`, `User_Password`, `User_C_Password`) VALUES ('$Email','$Password','$C_Password')";
    
        $result = mysqli_query($conn,$query);
        if($result){
            ?>
            <script>
                window.location.href="Login.php";
            </script>
            <?php
        }
    
        else{
            ?>
            <script>
                window.location.alert("Sign up Failed!");
            </script>
            <?php
        }
    }

}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Travel Airline</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Signup.css">
</head>
<body>
      <!-- Navbar -->
    <div class="navbar">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Travel Airline</h2>
        <ul>
            <li><a href="Home.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="About.php"><i class="fas fa-info-circle"></i> About Us</a></li>
            <li><a href="Contact.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="Signup.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        </ul>
        <div class="menu-icon">&#9776;</div>
    </div>
    <!-- Sign Up Form Section -->
    <div class="signup-container">
        <div class="signup-card">
            <div class="signup-header">
                <h2>Create an Account</h2>
                <p>Join us today!</p>
            </div>
            <form method="POST" onsubmit="return Validate()">
                <!-- <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Full Name" required>
                </div> -->
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type=" text" id="Email" name="Email" placeholder="Email Address"  >
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="Password" id="Password" name="Password" placeholder="Password"  >
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="Password" id="C_Password" name="C_Password" placeholder="Confirm Password"  >
                </div>
                <button type="submit" name="submit" class="signup-btn">Sign Up</button>
            </form>
            <!-- <div class="footer-links">
                <p>Already have an account? <a href="login.html">Log In</a></p>
            </div> -->
            <!-- <div class="footer-links">
                <p>Already have an account? <a href="login.html" id="login-link">Log In</a></p>
            </div> -->
            <div class="footer-links">
                <p>Already have an account? <a href="Login.php" class="login-link">Log In</a></p>
            </div>
            
        </div>
    </div>

    <!-- JavaScript -->
     <!-- JavaScript -->
     <script>
        const menuIcon = document.querySelector('.menu-icon');
        const navbarUl = document.querySelector('.navbar ul');

        menuIcon.addEventListener('click', () => {
            navbarUl.classList.toggle('active');
        });
        //java script code for sign up form validation:
        function Validate(){
            var  Email = document.getElementById("Email").value;
            var patt=/^([A-Za-z0-9/.]+@+[A-Za-z]+(\.)[A-Za-z]{2,})$/;
            var Password = document.getElementById("Password").value;
            var C_Password = document.getElementById("C_Password").value;
            if(Email===""|| Password===""|| C_Password===""){
                alert("All Fields are mendatory!");
                return false;
            }
            else if(!patt.test(Email)){
                alert("Invalid Email Credentials!");
            }
            else if(Password!==C_Password){
                alert("Password and confirm Password should be same!");
                return false;
            }
            else if(Password.length <8){
                alert("Password Should be 8 Character long!");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
</body>
</html>
