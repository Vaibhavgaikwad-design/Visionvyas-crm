<?php
// contact_us.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7; /* Light grey background */
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            width: 50%;
            max-width: 600px;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-info {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info a {
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Heading -->
        <h1>Contact Us</h1>

        <!-- Contact Info -->
        <div class="contact-info">
            <p><strong>Company Name:</strong> VisionYas</p>
            <p><strong>Address:</strong> 1234 Main St, Suite 567, City, Country</p>
            <p><strong>Email:</strong> <a href="mailto:contact@visionyas.com">contact@visionyas.com</a></p>
            <p><strong>Phone:</strong> +1 (123) 456-7890</p>
            <p><strong>Working Hours:</strong> Monday to Friday, 9 AM - 6 PM</p>
        </div>

        <!-- Back to Homepage Link -->
        <div class="back-link">
            <a href="index.php">Back to Homepage</a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for some components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
