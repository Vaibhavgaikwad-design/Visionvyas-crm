<?php
// Include database connection
include('db.php');
session_start(); // Start the session to store user info

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted values
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to get user data by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];  // Save the role for later use

            // Redirect to the dashboard based on role
            if ($_SESSION['role'] == 'Admin') {
                header("Location: admin_dashboard.php");
            } elseif ($_SESSION['role'] == 'Sales') {
                header("Location: sales_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        } else {
            echo "Invalid email or password!";
        }
    } else {
        echo "No user found with that email!";
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
                    <!-- Updated form action to login.php -->
                    <form method="POST" action="login.php" class="w-100 mt-4 pt-2">
                        <div class="mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email or Username" required>
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
                    <div class="w-100 mt-5 text-center mx-auto">
                        <div class="mb-4 border-bottom position-relative"><span class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute translate-middle">or</span></div>
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Facebook">
                                <i class="feather-facebook"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Twitter">
                                <i class="feather-twitter"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Github">
                                <i class="feather-github text"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mt-5 text-muted">
                        <span> Don't have an account?</span>
                        <a href="auth-register-cover.php" class="fw-bold">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include './partials/theme-customizer.php' ?>
    <?php include './partials/script.php' ?>
</body>

</html>
