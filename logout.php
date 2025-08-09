<?php
session_start();  // Start the session

// Destroy the session data
session_unset();   // Unset all session variables
session_destroy(); // Destroy the session

// Clear session cookies from the browser (this helps if cookies are lingering)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]);
}

// Set headers to prevent page from being cached by the browser
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: -1");  // Forces the page to expire immediately

// Redirect to the login page
header("Location: index.php"); 
exit();
?>
