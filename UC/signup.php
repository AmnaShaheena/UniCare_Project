<?php
// Include database configuration
require_once '../dbconf/dbconf.php';

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error_message = "This email is already registered. Please use a different one.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into the database
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>alert('Account created successfully! Please log in.'); window.location.href='login.php';</script>";
                exit;
            } else {
                $error_message = "Error registering user. Please try again.";
            }
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni Care Sign Up</title>
    <!-- Bootstrap and Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/signup.css">
</head>
<body>

<div class="container">
    <div class="left">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="../images/UClogo.png" width="200" height="200" alt="UniCare Logo" class="me-2">      
        </a>
        <strong class="unicare">UniCare</strong>
    </div>
    <div class="right">
        <h2>Create an account</h2>

        <!-- Error message -->
        <?php if ($error_message): ?>
            <div id="error-message" class="error-message" style="color: red;">
                <?= htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
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
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
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

        <div class="login-link">
            <p>Already have an account? <a href="login.php" class="text-warning">Sign In</a></p>
        </div>
    </div>
</div>

</body>
</html>
