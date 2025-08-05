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
        // Verify the password
        if (password_verify($password, $result['password'])) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['role'] = $result['role'];  // Save the role from the database

            // Check if the user is approved
            if ($result['status'] == 'pending') {
                echo "Your registration is pending approval. Please wait for the admin to approve your account.";
                exit();  // Stop further execution if user is pending
            }

            // Role-based redirection based on role from the database
            if ($_SESSION['role'] == 'Admin') {
                header("Location: Ad.php"); // Redirect to Admin Dashboard
            } elseif ($_SESSION['role'] == 'Manager') {
                header("Location: manager_dashboard.php"); // Redirect to Manager Dashboard
            } elseif ($_SESSION['role'] == 'User') {
                header("Location: user_dashboard.php"); // Redirect to User Dashboard
            } elseif ($_SESSION['role'] == 'Sales') {
                header("Location: sales_dashboard.php"); // Redirect to Sales Dashboard
            }
            exit();
        } else {
            echo "Invalid email or password!"; // If password is incorrect
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
                        <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
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
                                <a href="auth-reset-cover.php" class="fs-11 text-primary">Forgot password?</a>
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
</body>

</html>
