
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni Care Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style/signup.css">
</head>
<body>

<div class="container">
    <div class="left">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="../../images/UClogo.png" width="200" height="200" alt="UniCare Logo" class="me-2">      
        </a>
        <strong class="unicare">UniCare</strong>
    </div>
    <div class="right">
        <h2>Create a account</h2>

        

        <form method="POST" action="signup.php">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
               
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirmpassword" placeholder="Confirm your password" required>
                
            </div>
            <button type="submit" class="signup-button">Create account</button>
        </form>

        <div class="divider">
            <span>OR</span>
        </div>

        <div class="social-buttons">
            <button class="apple"><i class="bi bi-apple"></i>   Apple</button>
            <button class="facebook"><i class="bi bi-facebook"></i>   Facebook</button>
            <button class="google"><i class="bi bi-google"></i>   Google</button>
        </div>

        <div class="signup-link">
            <p>Already have an account? <a href="login.php" class="text-warning">Sign in</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// Include the database connection
require_once '../../conf/dbconf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<script>alert('Invalid email format'); window.location.href='signup.php';</script>");
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        die("<script>alert('Passwords do not match'); window.location.href='signup.php';</script>");
    }

    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists in the database
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        die("<script>alert('Email already registered. Please use a different email.'); window.location.href='signup.php';</script>");
    }

    // Insert the user into the database
    $query = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPassword);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Account created successfully!');
                window.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Error occurred: Unable to create account. Please try again.');
                window.location.href = 'signup.php';
              </script>";
    }

    // Close the prepared statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
}
?>
