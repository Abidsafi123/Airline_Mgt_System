<?php
// error_reporting(0);

$Conn = mysqli_connect("localhost", "root", "", "online_atms") or die("Connection Failed!");
if (isset($_POST['Submit'])) {
  $Passenger_Name = $_POST['Passenger_Name'];
  $Booking_Date = $_POST['Booking_Date'];
  $Booking_Time = $_POST['Booking_Time'];
  $Seat_No = $_POST['Seat_No'];
  $Payment_Method = $_POST['Payment_Method']; // New field

  $sql = "INSERT INTO `ticket_booking` (`Booking_Date`, `Seat_No`, `Booking_Time`, `Passenger_Name`, `Payment_Method`) 
          VALUES ('$Booking_Date', '$Seat_No', '$Booking_Time', '$Passenger_Name', '$Payment_Method')";
  $result = mysqli_query($Conn, $sql);

  if($result) {
    ?>
    <script>
      window.alert("Flight Has been Booked!");
    </script>
    <?php

  } 
  else
   {
        
    ?>
    <script>
      window.location.href="Book.php";
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
  <title>Booking Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
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
                height: 200px;
                padding: 20px;
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
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar ul li {
      margin: 0 10px;
    }

    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s;
    }

    .navbar ul li a:hover {
      color:  orange;
    }

    .hamburger {
      display: none;
      font-size: 26px;
      color: white;
      cursor: pointer;
    }

    .navbar ul {
      display: flex;
    }

    @media (max-width: 768px) {
      .navbar ul {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 60px;
        right: 0;
        width: 40%
      }

      .navbar ul.active {
        display: flex;
      }

      .hamburger {
        display: block;
      }
    }

    /* Booking Form Styles (reuse your existing styles) */
    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      margin: 20px auto;
    }
    .form-container {
  background-color: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 500px;
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
  font-size: 24px;
}

.form-group {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  position: relative;
}

input[type="text"],
input[type="date"],
input[type="time"],
input[type="number"],
select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
  transition: all 0.3s ease-in-out;
  padding-left: 40px; /* Space for the icons */
}

/* Dropdown Styling */
select {
  appearance: none;
  background: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%204%205'%3E%3Cpath%20fill='%23777'%20d='M2%200L0%202h4z'/%3E%3C/svg%3E") no-repeat right 10px center;
  background-color: #fff;
  background-size: 10px;
}
.navbar img{
    width: 50px;
    border-radius: 50px;
}

.form-group i {
  position: absolute;
  left: 10px;
  color: #777;
  font-size: 18px;
}

input:focus,
select:focus {
  background-color: #f0f8ff;
  border-color: #4CAF50;
  box-shadow: 0 0 8px rgba(0, 128, 0, 0.3);
}

input::placeholder,
select {
  color: #888;
  font-style: italic;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.button-group {
  display: flex;
  justify-content: space-between;
  gap: 10px;
}

.btn-submit, .btn-reset {
  width: 48%;  /* Make buttons take up nearly equal width */
  padding: 12px;
  font-size: 18px;
  cursor: pointer;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.3s ease-in-out;
}

.btn-submit {
  background-color: #28a745;
  border: none;
  color: white;
}

.btn-submit:hover {
  background-color: #218838;
}

.btn-reset {
  background-color: #f44336;
  border: none;
  color: white;
}

.btn-reset:hover {
  background-color: #e53935;
}

i {
  margin-right: 5px;
}


@media (max-width: 480px) {
  .form-container {
    padding: 20px;
    margin-top: 100px;
  }
  h2 {
    font-size: 20px;
  }
  .form-group i {
    font-size: 16px;
  }
}

@media (max-width: 768px){
    .form-container {
    padding: 20px;
    margin-top: 100px;
  }
 
}
/* Footer Styling */
        .footer {
            background-color: #002147; 
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer img {
            height: 40px;
            margin-bottom: 10px;
        }

        .footer h2 {
            color: #f2a365;
        }

        .footer ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .footer ul li a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .footer ul li a:hover {
            color: #f2a365;
        }

        footer {
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .social-media-icons i {
            font-size: 1.5rem;
            color: #fff;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-media-icons i:hover {
            color: #f2a365;
        }
        .navbar h2{
          color: #f2a365;
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

<!-- Booking Form -->
<div class="form-container">
  <h2><i class="fas fa-ticket-alt"></i> Booking Form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <i class="fas fa-user"></i>
      <input type="text" id="passenger-name" name="Passenger_Name" placeholder="Enter passenger name" required>
    </div>
    <div class="form-group">
      <i class="fas fa-calendar-alt"></i>
      <input type="date" id="booking-date" name="Booking_Date" required>
    </div>
    <div class="form-group">
      <i class="fas fa-clock"></i>
      <input type="time" id="booking-time" name="Booking_Time" required>
    </div>
    <div class="form-group">
      <i class="fas fa-chair"></i>
      <input type="number" id="seat-number" name="Seat_No" placeholder="Enter seat number" required min="1">
    </div>
    <div class="form-group">
      <i class="fas fa-credit-card"></i>
      <select id="payment-method" name="Payment_Method" required>
        <option value="" disabled selected>Select Payment Method</option>
        <option value="Credit Card">Credit Card</option>
        <option value="Debit Card">Debit Card</option>
        <option value="PayPal">PayPal</option>
      </select>
    </div>
    <div class="button-group">
      <button type="submit" class="btn-submit" name="Submit"><i class="fas fa-paper-plane"></i> Book Now</button>
      <button type="reset" class="btn-reset"><i class="fas fa-undo-alt"></i> Reset</button>
    </div>
  </form>
</div>
 <!-- Footer -->
 <div class="footer">
    <img src="logo.png" alt="Logo">
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
