<?php
session_start();
include 'db.php';  // Include the database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        // Check if email already exists in the database
        $check_email = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $check_email->bindValue(1, $email);
        $check_email->execute();

        if ($check_email->rowCount() > 0) {
            $error = "Email is already taken. Please use a different one!";
        } else {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Set user status to "pending" until admin approval
            $status = 'pending';

            // Prepare the SQL query to insert the user data using PDO
            $sql = "INSERT INTO users (full_name, email, username, password, status) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind the values with bindValue
            $stmt->bindValue(1, $full_name);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $username);
            $stmt->bindValue(4, $hashed_password);
            $stmt->bindValue(5, $status);  // Status is set to 'pending'

            // Execute the query
            if ($stmt->execute()) {
                $_SESSION['user_id'] = $conn->lastInsertId();  // Save the user ID to session
                $_SESSION['user_email'] = $email;
                $_SESSION['user_status'] = $status;  // Save the user status to session

                // Redirect to the login page with a pending status message
                header("Location: index.php?status=pending"); 
                exit();
            } else {
                $error = "Error registering user. Please try again!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">
<?php include './partials/head.php' ?>

<body>
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="assets/images/auth/auth-cover-register-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <h2 class="fs-20 fw-bolder mb-4">Register</h2>
                    <form action="register.php" method="POST" class="w-100 mt-4 pt-2">
                        <div class="mb-4">
                            <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-4 generate-pass">
                            <div class="input-group field">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-text c-pointer show-pass" data-bs-toggle="tooltip" title="Show/Hide Password" onclick="togglePasswordVisibility()">
                                    <i class="feather-eye"></i> <!-- Eye icon to toggle visibility -->
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <!-- Display error if any -->
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Create Account</button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted">
                        <span>Already have an account?</span>
                        <a href="index.php" class="fw-bold">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include './partials/theme-customizer.php' ?>
    <?php include './partials/script.php' ?>

    <!-- JavaScript for Show Password -->
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('password');
            var passwordFieldType = passwordField.type === "password" ? "text" : "password";
            passwordField.type = passwordFieldType;
        }
    </script>
</body>

</html>
