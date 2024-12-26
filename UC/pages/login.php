

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni Care Sign In</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style/login.css">
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
        <h2>Sign in</h2>

        <!-- Display error message if login fails -->
        <?php if (!empty($error_message)): ?>
            <div id="error-message" class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
               
            </div>
            <button type="submit" class="signin-button">Sign in</button>
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
            <p>Don't have an account? <a href="signup.php" class="text-warning">Sign up</a></p>
            <p><a href="reset.php" class="text-muted">Forgotten password?</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
// Start the session
session_start();

// Include the database connection
include '../../conf/dbconf.php';

// Initialize variables for form data
$email = $password = "";

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $row = mysqli_fetch_assoc($result);
        
        // Check if the entered password matches the stored password (hashed password)
        if (password_verify($password, $row['password'])) {
            // Store the user's email in the session
            $_SESSION['userEmail'] = $email;
            header('Location: home.php'); // Redirect to the home page after successful login
            exit();
        } else {
            // Password incorrect
            echo "<script>alert('Incorrect password. Please try again.'); window.location.href='login.php';</script>";
        }
    } else {
        // Email not found
        echo "<script>alert('Email not found. Please try again.'); window.location.href='login.php';</script>";
    }
}
?>
