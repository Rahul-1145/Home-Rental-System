<?php
session_start();

include("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        <h1>Contact Us</h1>
        <p>If you have any questions or need assistance, feel free to reach out to us.</p>
        <p><strong>Email:</strong> support@homerentalsystem.com</p>
        <p><strong>Phone:</strong> +91 7039789856</p>
        <p><strong>Address:</strong> HemeRent Office, Sadar Bazar, Satara, India</p>
    </div>
</body>

</html>