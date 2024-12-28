<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking Information</title>
    <style>
                /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f5f5f5;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}


/* Header Styles */
.header {
    text-align: center;
    background: linear-gradient(to right, #4facfe, #00f2fe);
    color: white;
    padding: 2rem 0;
}

.header h1 {
    font-size: 2.5rem;
}

.header p {
    font-size: 1.2rem;
}

/* Service Section */
.services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    padding: 1rem 0;
    flex-grow: 1;
}

.service {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease-in-out;
}

.service h2 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    color: #007bff;
}

.service p {
    font-size: 1rem;
    color: #555;
}

/* Back to Home Button */
.home-button {
    position: fixed;
    bottom: 70px;
    right: 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease-in-out;
}

.home-button:hover {
    background-color: #0056b3;
}

/* Footer */
.footer {
    text-align: center;
    padding: 1rem;
    background: #007bff;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <header class="header">
        <h1>Ticket Booking Information</h1>
        <p>Plan your journey with ease!</p>
    </header>

    <main class="services">
        <section class="service fade">
            <h2>Online Booking</h2>
            <p>Book your tickets online for a hassle-free experience.</p>
        </section>
        <section class="service fade">
            <h2>Flexible Rescheduling</h2>
            <p>Change your travel dates with our easy rescheduling options.</p>
        </section>
        <section class="service fade">
            <h2>Group Discounts</h2>
            <p>Travel with friends and save with group discounts.</p>
        </section>
        <section class="service fade">
            <h2>Instant Confirmation</h2>
            <p>Receive instant ticket confirmation after booking.</p>
        </section>
    </main>

    <button class="home-button" onclick="goHome()">Back to Home</button>

    <footer class="footer">
        <p>© 2024 Ticket Booking Information. All rights reserved.</p>
    </footer>

    <script  >
        // Fade-in animation
document.addEventListener('DOMContentLoaded', () => {
    const services = document.querySelectorAll('.service');

    const fadeInOnScroll = () => {
        services.forEach((service) => {
            const rect = service.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                service.style.opacity = 1;
                service.style.transform = "translateY(0)";
            }
        });
    };

    window.addEventListener('scroll', fadeInOnScroll);
    fadeInOnScroll(); // Trigger on page load
});

// Back to Home Button Action
function goHome() {
    window.location.href = " Home.php"; // Replace with the actual home page URL
}

    </script>
</body>
</html>
