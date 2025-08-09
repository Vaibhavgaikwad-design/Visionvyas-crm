<?php


// If the user is already logged in, redirect them to their dashboard
if (isset($_SESSION['user_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'Admin') {
        header("Location: admin_dashboard.php");
        exit();
    } elseif ($_SESSION['role'] == 'Manager') {
        header("Location: manager_dashboard.php");
        exit();
    } // Add other roles as necessary
}
?>
<?php
// Include database connection
include('db.php');
session_start(); // Start the session to store user info

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted values
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to get user data by email using PDO
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql); // Prepare the query

    // Bind the parameter
    $stmt->bindParam(':email', $email, PDO::PARAM_STR); // Use bindParam for PDO

    // Execute the query
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // User found
   // After the password verification
if ($result && password_verify($password, $result['password'])) {
    // Session regeneration to prevent session fixation attacks
    session_regenerate_id(true); 

    // Store user info in session
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['role'] = $result['role'];

    // Redirect based on user role
    $roleRedirects = [
        'Admin' => 'Ad.php',
        'Manager' => 'manager_dashboard.php',
        'User' => 'user_dashboard.php',
        'Sales' => 'sales_dashboard.php',
    ];

    // Check if the user is approved
    if ($result['status'] == 'pending') {
        header("Location: pending_approval.php");
    } else {
        // Redirect to the corresponding dashboard based on role
        header("Location: " . $roleRedirects[$_SESSION['role']] ?? 'default_dashboard.php');
    }
    exit();
} else {
    echo "Incorrect credentials, please try again.";
}

    } else {
        echo "No user found with that email!"; // If email is not found
    }
}
?>

<!-- HTML code for the login form -->
<!DOCTYPE html>
<html lang="zxx">
<?php include './partials/head.php' ?>

<body>
    <!-- Main Content -->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="assets/images/auth/auth-cover-login-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <div class="wd-50 mb-5">
                        <img src="assets/images/king.png" alt="" class="img-fluid">
                    </div>
                    <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                    <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>
                    <p class="fs-12 fw-medium text-muted">Thank you for getting back <strong>to our platform</strong>, let’s access our best recommendations for you.</p>
                    <!-- Form action changed to 'login.php' for processing the login -->
                    <form method="POST" action="index.php" class="w-100 mt-4 pt-2">
                        <div class="mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label c-pointer" for="rememberMe">Remember Me</label>
                                </div>
                            </div>
                            <div>
                                <a href="auth-reset-minimal.php" class="fs-11 text-primary">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted">
                        <span>Don't have an account?</span>
                        <a href="register.php" class="fw-bold">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include './partials/theme-customizer.php' ?>
    <?php include './partials/script.php' ?>
    <script>
    // Prevent the user from going back to the previous page after logout
    window.history.pushState(null, null, window.location.href);
    window.history.back();
    window.history.forward();
    window.onpopstate = function () {
        window.history.forward();
    };
</script>

</body>

</html>
