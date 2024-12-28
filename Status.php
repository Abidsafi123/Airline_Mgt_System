<?php
$Conn = mysqli_connect("localhost", "root", "", "online_atms") or die("Connection Failed!");
if (isset($_POST['Submit'])) {
    $Flight_No = $_POST['Flight_No'];
    $Current_Status = $_POST['Current_Status'];
    $Last_Updated = $_POST['Last_Updated'];
    $sql = "INSERT INTO `status` (`Flight_No`, `Current_Status`, `Last_Updated`) VALUES ('$Flight_No', '$Current_Status', '$Last_Updated')";
    $result = mysqli_query($Conn, $sql);
    if ($result) {
        ?>
        <script>
          window.alert("Status Has been updated!");
        </script>
        <?php
    
      } else {
        ?>
        <script>
          window.location.href="Status.php";
        </script>
        <?php
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Reset and Global Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
        }
        
        
          /* Responsive Navbar */
          @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }

            .navbar ul {
                display: none;
                flex-direction: column;
                background-color: #002147;
                position: absolute;
                top: 60px;
                right: 10px;
                width: 200px;
                border-radius: 5px;
                overflow: hidden;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            }

            .navbar ul.active {
                display: flex;
            }

            .navbar ul li {
                margin: 10px 0;
                text-align: center;
            }
        }


        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #002147;
            padding: 10px 20px;
        }

        .navbar .logo {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            color: orange;
        }

        .hamburger {
            display: none;
            font-size: 26px;
            color: white;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar ul {
                display: none;
                flex-direction: column;
                background-color:#333;
                position: absolute;
                top: 60px;
                right: 0;
                width: 40%;
                padding: 10px 0;
            }

            .navbar ul.active {
                display: flex;
            }

            .hamburger {
                display: block;
            }
        }

        /* Form Styling */
        .flight-status-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
            box-sizing: border-box;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
 
        .button-group {
            display: flex;
            gap: 10px;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1; /* Make buttons take equal space */
            text-align: center;
        }

        .button i {
            font-size: 18px;
        }

        .button.reset {
            background-color: #f44336;
        }

        .button:hover {
            opacity: 0.9;
        }

        /* Footer Styling */
        .footer {
            background-color: #002147;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .footer h2 {
            color: #f2a365;
        }

        .social-media-icons i {
            font-size: 1.5rem;
            color: white;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .social-media-icons i:hover {
            color: #f2a365;
        }
        .navbar img{
            width: 40px;
            border-radius: 50px;
        }
        .navbar h2{
            color:#f2a365;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <img src="logo.png" alt="Logo" class="logo">
    <h2>Travel Airline</h2>
    <ul>
        <li><a href="Home.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="About.php"><i class="fas fa-info-circle"></i> About Us</a></li>
        <li><a href="Contact.php"><i class="fas fa-envelope"></i> Contact Us</a></li>
        <li><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li><a href="Signup.php"><i class="fas fa-user-plus"></i> Signup</a></li>
    </ul>
    <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
</div>

<!-- Flight Status Form -->
<div class="flight-status-form">
    <h2>Flight Status Form</h2>
    <form action="#" method="POST">
        <!-- Flight Number Input -->
        <div class="form-group">
            <label for="flight-number">Flight Number</label>
            <i class="fas fa-plane-departure"></i>
            <input type="text" id="flight-number" name="Flight_No" required placeholder="Enter Flight Number">
        </div>

        <!-- Flight Status Dropdown -->
        <div class="form-group">
            <label for="flight-status">Current Status</label>
            <i class="fas fa-info-circle"></i>
            <select id="flight-status" name="Current_Status" required>
                <option value="on-time">On Time</option>
                <option value="delayed">Delayed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div>

        <!-- Update Time Input -->
        <div class="form-group">
            <label for="update-time">Last Updated</label>
            <i class="fas fa-calendar-check"></i>
            <input type="datetime-local" id="update-time" name="Last_Updated" required>
        </div>

        <!-- Submit and Reset Buttons -->
        <div class="button-group">
            <button type="submit" name="Submit" class="button">
                <i class="fas fa-paper-plane"></i> Submit
            </button>
            <button type="reset" class="button reset">
                <i class="fas fa-undo"></i> Reset
            </button>
        </div>
    </form>
</div>
<!-- Footer -->
<div class="footer">
    <h2>Travel Airline</h2>
    <div class="social-media-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
    </div>
    <footer>© 2024 Travel Airline. All rights reserved.</footer>
</div>

<script>
    function toggleMenu() {
        const navMenu = document.querySelector('.navbar ul');
        navMenu.classList.toggle('active');
    }
</script>

</body>
</html>
