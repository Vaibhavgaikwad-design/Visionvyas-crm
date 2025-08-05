<?php
$host = "localhost";
$dbname = "crm_system";  // Replace with your actual database name
$username = "root";  // Default username in XAMPP
$password = "";  // Default password is empty in XAMPP

try {
    // Create a new PDO instance to handle database connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception for easier debugging
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there is an error, display it
    echo "Connection failed: " . $e->getMessage();
}
?>
