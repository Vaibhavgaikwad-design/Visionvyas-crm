


<?php
session_start();
include 'db.php';  // Include the database connection

// Check if the user is an admin (You can customize this logic based on your login session)
if ($_SESSION['role'] != 'Admin') {
    header('Location: index.php');  // Redirect if not an admin
    exit();
}

// Fetch all users with 'pending' status
$stmt = $conn->prepare("SELECT * FROM users WHERE status = 'pending'");
$stmt->execute();
$pending_users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Admin Dashboard</h1>
        <h2 class="my-4">Pending User Approvals</h2>

        <?php
        if (count($pending_users) > 0) {
            // Loop through pending users and display them
            foreach ($pending_users as $user) {
                echo "<div class='card mb-3'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $user['full_name'] . "</h5>
                            <p class='card-text'>Email: " . $user['email'] . "</p>
                            <p class='card-text'>Username: " . $user['username'] . "</p>
                            <form action='approve_user.php' method='POST'>
                                <input type='hidden' name='user_id' value='" . $user['id'] . "'>
                                <div class='form-group'>
                                    <label for='role'>Assign Role:</label>
                                    <select name='role' class='form-control' required>
                                        <option value='User'>User</option>
                                        <option value='Sales'>Sales</option>
                                        <option value='Manager'>Manager</option>
                                        <option value='Admin'>Admin</option>
                                    </select>
                                </div>
                                <button type='submit' name='approve' class='btn btn-success'>Approve</button>
                                <button type='submit' name='deny' class='btn btn-danger'>Deny</button>
                            </form>
                        </div>
                      </div>";
            }
        } else {
            echo "<p>No pending users found.</p>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
