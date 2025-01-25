<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeToDream</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
        }

        .banner {
            width: 100%;
        }

        .banner img {
            width: 100%;
            display: block;
        }

        .details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .section {
            flex: 1 1 calc(25% - 20px);
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .section h2 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #333;
        }

        .section p {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .section a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .section a:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .section {
                flex: 1 1 100%;
            }

            .navbar {
                display: flex;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background-color: #fff;
                box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
                justify-content: space-around;
                padding: 10px 0;
                z-index: 1000;
            }

            .navbar a {
                text-decoration: none;
                color: #333;
                font-size: 14px;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar a:hover {
                color: #007BFF;
            }

            .navbar a span {
                font-size: 12px;
                margin-top: 5px;
            }
        }

        .navbar-desktop {
            display: none;
            width: 100%;
            background-color: #0e2db8c9;
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar-desktop a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
        }

        .navbar-desktop a:hover {
            color: #007BFF;
        }

        @media (min-width: 769px) {
            .navbar-desktop {
                display: flex;
                justify-content: center;
            }

            .navbar {
                display: none;
            }
        }
        .contact-us {
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-us h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .contact-us form {
            display: flex;
            flex-direction: column;
        }

        .contact-us form input,
        .contact-us form textarea,
        .contact-us form button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-us form button {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        .contact-us form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="banner">
        <img src="https://i.ibb.co/MhcQdc3/banner.png" alt="Banner Image">
    </div>
    <div class="details">
        <div class="section">
            <h2>Website</h2>
            <img src="https://i.ibb.co/hDSk6Hv/website.jpg" width="220px" height="230">
            <p>We design and develop modern, responsive websites tailored to your needs.</p>
            <a href="#">Learn More</a>
        </div>
        <div class="section">
            <h2>App</h2>
            <img src="https://i.ibb.co/Y0bvFtP/mobile.png">
            <p>Our team builds user-friendly mobile apps for Android and iOS platforms.</p>
            <a href="#">Learn More</a>
        </div>
        <div class="section">
            <h2>Startup</h2>
            <img src="https://i.ibb.co/NVdtKq1/bihar.jpg">
            <p>We help startups bring their ideas to life with innovative solutions.</p>
            <a href="#">Learn More</a>
        </div>
        <div class="section">
            <h2>Content Creation</h2>
            <img src="https://i.ibb.co/D5Jh8VW/LOGO-YOUTUBE.png" width="200px">
            <p>Our creative team produces engaging content to boost your brand.</p>
            <a href="#">Learn More</a>
        </div>
    </div>
    <div class="navbar">
        <a href="#">
            <img src="https://i.ibb.co/jTxtXCP/home.png" alt="Home Icon" width="24">
            <span>Home</span>
        </a>
        <a href="#">
            <img src="https://i.ibb.co/jzbRkpZ/chat.jpg" alt="Chat Icon" width="34">
            <span>Chat</span>
        </a>
        <a href="#">
            <img src="https://i.ibb.co/2hqVLWD/service.png" alt="Service Icon" width="24">
            <span>Service</span>
        </a>
        <a href="#">
            <img src="https://i.ibb.co/yQWCHBG/mentor.png" alt="Mentor Icon" width="24">
            <span>Mentor</span>
        </a>
        <a href="#">
            <img src="https://i.ibb.co/5vsw8F4/account.png/images/account.png" alt="Account Icon" width="24">
            <span>Account</span>
        </a>
    </div>
    <div class="contact-us">
        <h2>Contact Us</h2>
        <form action="submit_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="navbar-desktop">
        <a href="#">Home</a>
        <a href="#">Chat</a>
        <a href="#">Service</a>
        <a href="#">Mentor</a>
        <a href="#">Account</a>
    </div>
</body>
</html>

<?php
// submit_contact.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codetodream";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
