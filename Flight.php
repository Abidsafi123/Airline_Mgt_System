 
<?php
$Conn = mysqli_connect("localhost","root","","online_atms") or die("Connection Failed:");
if(isset($_POST['Submit'])){
    $Airline_Name = $_POST['Airline_Name'];
    $Departure_Date = $_POST['Departure_Date'];
    $Arrival_Date = $_POST['Arrival_Date'];
    $Origin_Airport = $_POST['Origin_Airport'];
    $Destination_Airport = $_POST['Destination_Airport'];
    $sql = "INSERT INTO `flight` ( `Airline_Name`, `Departure_Date`, `Arrival_Date`, `Orign_Airport`, `Destination_Airport`) VALUES (  ' $Airline_Name', ' $Departure_Date', ' $Arrival_Date', '$Origin_Airport', '$Destination_Airport')";
    $result = mysqli_query($Conn,$sql);
    if($result){
        ?>
    <script>
      window.alert("Flight Has been Done!");
    </script>
    <?php

  } else {
    ?>
    <script>
      window.location.href="Flight.php";
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
    <title>Sign Up | Travel Airline</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
         /* Global Styles */
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
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

 /* Navbar Styling */
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: #002147;
    color: white;
 }
 
 .navbar .logo {
    height: 50px;
    border-radius: 50%;
 }
 
 .navbar h2 {
    font-size: 1.5rem;
    margin-left: 10px;
    color: #f2a365;
 }
 
 .navbar ul {
    list-style: none;
    display: flex;
    gap: 20px;
 }
 
 .navbar ul li a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    transition: color 0.3s ease;
 }
 
 .navbar ul li a:hover {
    color: #f2a365;
 }
 
 .menu-icon {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: white;
 }



 .btn-container {
    display: flex;
    justify-content: space-between;
    gap: 10px;
  }

  .btn-submit, .btn-reset {
    width: 48%; /* Adjust width to fit both buttons in the same row */
    padding: 12px;
    border: none;
    border-radius: 4px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
  }

  .btn-submit {
    background-color: #28a745;
    color: white;
  }

  .btn-submit:hover {
    background-color: #218838;
  }

  .btn-reset {
    background-color: #dc3545;
    color: white;
  }

  .btn-reset:hover {
    background-color: #c82333;
  }


      /* Container for Flight Registration Box */
      .flight-registration-container {
          background: #fff;
          padding: 40px 30px;
          border-radius: 10px;
          margin: auto;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
          width: 100%;
          max-width: 600px;
          animation: fadeIn 2s ease-out;
      }

      .flight-registration-container h2 {
          text-align: center;
          color: #333;
          font-size: 2rem;
          margin-bottom: 20px;
          font-weight: 600;
      }

      /* Input Group Styling */
      .input-group {
          margin-bottom: 20px;
          position: relative;
      }

      .input-group label {
          display: block;
          font-size: 1rem;
          margin-bottom: 5px;
          color: #333;
          font-weight: 600;
      }

      .input-group input, .input-group select {
          width: 100%;
          padding: 15px 15px 15px 40px; /* Added padding to accommodate icons */
          font-size: 1rem;
          border-radius: 5px;
          border: 1px solid #ddd;
          outline: none;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          transition: border-color 0.3s ease;
      }

      .input-group input:focus, .input-group select:focus {
          border-color: #007bff; /* Blue focus color */
      }

      .input-group i {
          position: absolute;
          left: 15px;
          top: 50%;
          transform: translateY(-50%);
          color: #aaa;
          font-size: 18px;
      }

      /* Submit Button Styling */
      .input-group input[type="submit"] {
          background-color: #007bff; /* Blue button */
          color: white;
          border: none;
          cursor: pointer;
          transition: background-color 0.3s ease, transform 0.3s ease;
      }

      .input-group input[type="submit"]:hover {
          background-color: #0056b3;
          transform: scale(1.05);
      }

      /* Animations */
      @keyframes fadeIn {
          0% { opacity: 0; transform: translateY(50px); }
          100% { opacity: 1; transform: translateY(0); }
      }

      /* Responsive Design */
      @media screen and (max-width: 768px) {
          .flight-registration-container {
              width: 80%;
              padding: 30px 20px;
          }

          .input-group i {
              font-size: 16px; /* Adjust icon size for smaller screens */
          }

          .flight-registration-container h2 {
              font-size: 1.5rem; /* Adjust header size for mobile */
          }

          .input-group input, .input-group select {
              padding: 12px 12px 12px 35px; /* Adjust padding for smaller screens */
          }
      }
      @media screen and (max-width:480px) {
          .btn-container {
      flex-direction: column; /* Stack buttons vertically on small screens */
    }
    .btn-submit, .btn-reset {
      width: 100%; /* Full width for small screens */
    }
      }

 
.footer-links {
    margin-top: 20px;
}

.footer-links a {
    color: #666;
    text-decoration: none;
    font-size: 0.9rem;
    margin: 0 10px;
}

.footer-links a:hover {
    color: #ff6600;
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

/* Responsive Design */
@media (max-width: 768px) {
    .menu-icon {
        display: block;
    }
 
    .navbar ul {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 60px;
        right: 10px;
        width: 200px;
        border-radius: 5px;
    }
    .navbar ul li{
        text-align: center;
    }
 
    .navbar ul.active {
        display: flex;
    }

    .signup-card {
        padding: 30px 40px;
        width: 100%;
        max-width: 350px;
    }

    .navbar {
        flex-direction: column;
        align-items: flex-start;
        padding: 10px;
    }

    .navbar-logo {
        margin-bottom: 10px;
    }
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
            <li><a href="Contact.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="Signup.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        </ul>
        <div class="menu-icon">&#9776;</div>
    </div>


    <!-- Flight Registration Form -->
    
    <div class="flight-registration-container">
        <h2>Flight Registration</h2>
        
        <!-- Airline Name Input -->
         <form action="" method="POST">
        <div class="input-group">
            <label for="airline">Airline Name</label>
            <i class="fas fa-plane-departure"></i>
            <input type="text" id="airline" name="Airline_Name" placeholder="Airline Name" required>
        </div>
        
        <!-- Departure Date Input -->
        <div class="input-group">
            <label for="departure-date">Departure Date</label>
            <i class="fas fa-calendar-alt"></i>
            <input type="date" id="departure-date" name="Departure_Date" required>
        </div>
        
        <!-- Arrival Date Input -->
        <div class="input-group">
            <label for="arrival-date">Arrival Date</label>
            <i class="fas fa-calendar-check"></i>
            <input type="date" id="arrival-date" name="Arrival_Date" required>
        </div>

        <!-- Origin Airport Input -->
        <div class="input-group">
            <label for="origin-airport">Origin Airport</label>
            <i class="fas fa-plane-arrival"></i>
            <input type="text" id="origin-airport" name="Origin_Airport" placeholder="Origin Airport" required>
        </div>

        <!-- Destination Input -->
        <div class="input-group">
            <label for="destination">Destination</label>
            <i class="fas fa-plane"></i>
            <input type="text" id="destination" name="Destination_Airport" placeholder="Destination" required>
        </div>
        
        <div class="btn-container">
            <button type="Submit" class="btn-submit" name="Submit">
              <i class="fas fa-paper-plane"></i> Submit Registration
            </button>
            <button type="reset" class="btn-reset">
              <i class="fas fa-undo"></i> Reset
            </button>
          </div>
    </div>
</form>
            
             
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
    <!-- JavaScript -->
     <!-- JavaScript -->
     <script>
        const menuIcon = document.querySelector('.menu-icon');
        const navbarUl = document.querySelector('.navbar ul');

        menuIcon.addEventListener('click', () => {
            navbarUl.classList.toggle('active');
        });
    </script>
</body>
</html>


