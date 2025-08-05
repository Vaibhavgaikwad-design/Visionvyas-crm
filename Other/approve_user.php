<?php
session_start();
include 'db.php';  // Include the database connection

// Check if the user is an admin (You can customize this logic based on your login session)
if ($_SESSION['role'] != 'Admin') {
    header('Location: index.php');  // Redirect if not an admin
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];  // Get the user ID
    $role = $_POST['role'];  // Get the role selected by the admin

    if (isset($_POST['approve'])) {
        // Approve the user and assign a role (e.g., 'User', 'Sales', 'Manager', 'Admin')
        $sql = "UPDATE users SET status = 'approved', role = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $role);
        $stmt->bindValue(2, $user_id);
        if ($stmt->execute()) {
            echo "User approved successfully!";
            // Redirect back to the admin dashboard
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error approving user.";
        }
    } elseif (isset($_POST['deny'])) {
        // Deny the user
        $sql = "UPDATE users SET status = 'denied' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $user_id);
        if ($stmt->execute()) {
            echo "User denied successfully!";
            // Redirect back to the admin dashboard
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error denying user.";
        }
    }
}
?>
