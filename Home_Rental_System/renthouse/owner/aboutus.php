<?php
session_start();

include("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to Home Rental System, your trusted platform for finding and managing rental properties. We aim to
            simplify the process for both tenants and landlords by offering a user-friendly and secure experience.</p>
        <p>Our platform allows landlords to list their properties easily and tenants to find their perfect home with
            advanced search filters. We focus on transparency, security, and ease of use to ensure a hassle-free rental
            experience.</p>
        <p>Thank you for choosing Home Rental System. We are committed to providing the best service for your rental
            needs.</p>
    </div>
</body>

</html>