<?php
// Include the database configuration file
require_once '../conf/dbconf.php';

// Handling form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Fetch and sanitize input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ec ho "Invalid email format.";
        exit;
    }

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);

    // Execute and check if the insertion was successful
    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
   // $stmt->close();
}

// Close the database connection
$conn->close();
?>
