<?php
// pending_approval.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Pending</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7; /* Light grey background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 1000px;
        }

        .logo {
            width: 80px; /* Adjust logo size */
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 30px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .contact-link {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
            margin-top: 15px;
        }

        .contact-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Logo -->
        <img src="assets\images\ki.png"alt="Company Logo" class="logo">

        <!-- Message -->
        <h1>Thank you!</h1>
        <p>Your registration is currently <strong>pending approval</strong>.</p>
        <p>Please check your email for further instructions on how to complete your account setup.</p>

        <!-- Button -->
        <a href="index.php" class="btn btn-primary">Continue to Homepage</a>

        <!-- Contact Link -->
        <p><a href="contact_us.php" class="contact-link">Having trouble? Contact us</a></p>
    </div>

    <!-- Bootstrap JS (Optional for some components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
