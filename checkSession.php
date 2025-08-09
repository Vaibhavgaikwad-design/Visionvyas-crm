<?php
session_start();

function checkSession() {
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
        header("Location: index.php"); // Redirect to login if session not set
        exit();
    }
}
?>
