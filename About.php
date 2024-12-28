<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Base Reset and Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #e6f7ff, #cce7ff); /* Lighter background */
            color: #333;
        }

        h1, h2 {
            color: #333;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color:#002147;
            color: white;
            position: relative;
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

        /* Hamburger Icon */
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 25px;
            cursor: pointer;
        }

        .hamburger div {
            width: 30px;
            height: 4px;
            background-color: white;
            border-radius: 10px;
        }

        /* About Section with Background and Fade Effect */
        .about-section {
            text-align: center;
            padding: 40px 20px;
            max-width: 900px;
            margin: 0 auto;
            background: linear-gradient(135deg, #ff6f61, #ffbc6f);
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 2s ease-out;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #fff;
            animation: fadeInText 2s ease-out;
        }

        .about-section p {
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #fff;
            animation: fadeInText 3s ease-out;
        }

        .highlight {
            color: #ff6f61;
            font-weight: bold;
        }

        /* Call to Action Button */
        .cta-button {
            background-color: #ff6f61;
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.2rem;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-button:hover {
            background-color: #ff4b3d;
            transform: scale(1.05);
        }

        /* Services Section Styling */
        .services {
            background-color: #fff;
            padding: 60px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .services h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2a2a2a;
            animation: fadeIn 2s ease-out;
        }

        .services ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .services ul li {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .services ul li:hover {
            transform: translateY(-5px);
            background-color: #ff6f61;
            color: white;
        }

        .services ul li i {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .services ul li strong {
            font-size: 1.2rem;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeInText {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar ul {
                display: none;
                flex-direction: column;
                background-color: #333;
                position: absolute;
                top: 60px;
                right: 0;
                width: 200px;
                border-radius: 5px;
            }

            .navbar ul.active {
                display: flex;
            }

            .hamburger {
                display: flex;
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

      
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Travel Airline</h2>
        <ul>
            <li><a href=" Home.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="About.php"><i class="fas fa-info-circle"></i> About Us</a></li>
            <li><a href="Contact.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="Signup.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        </ul>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- About Us Content -->
    <div class="header">About Us</div>

    <div class="about-section">
        <h2 id="typewriter"></h2> <!-- Typing animation target -->
        <p>Travel Channel International (Pvt) Limited is Pakistan's leading travel company, established in 2003. We offer top-tier customer services, seamless booking, and great value for money.</p>
        <p><strong>"Happy Flying With  Travel Airlines!"</strong></p>
        <a href="#" class="cta-button">Contact Us</a>
    </div>

    <!-- Services Section -->
    <div class="services">
        <h3>We Provide Services of the Following Airlines</h3>
        <ul>
            <li><i class="fab fa-empire"></i><strong>Fly Emirates</strong></li>
            <li><i class="fab fa-telegram-plane"></i><strong>Turkish Airlines</strong></li>
            <li><i class="fab fa-etsy"></i><strong>Etihad Airline</strong></li>
            <li><i class="fab fa-airbnb"></i><strong>Air Sial</strong></li>
            <li><i class="fab fa-google"></i><strong>Saudia Airline</strong></li>
            <li><i class="fab fa-google"></i><strong>British Airways</strong></li>
        </ul>
    </div>

    <!-- Footer -->
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
    

    <!-- JavaScript for Navbar and Typewriter Effect -->
    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.3/dist/typeit.min.js"></script>
    <script>
        const menuIcon = document.querySelector('.hamburger');
        const navbarUl = document.querySelector('.navbar ul');

        menuIcon.addEventListener('click', () => {
            navbarUl.classList.toggle('active');
        });

        // Typewriter Effect
        new TypeIt("#typewriter", {
            strings: ["Why Choose Us?"],
            speed: 100,
            loop: false
        }).go();
    </script>    

</body>
</html>
