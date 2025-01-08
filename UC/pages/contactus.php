<?php
// Include the database connection file
include '../../conf/dbconf.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize the inputs
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    // Prepare SQL query to insert into the database
    $sql = "INSERT INTO contact_us (email, name, message) VALUES (?, ?, ?)";
    if ($stmt = $connect->prepare($sql)) {
        // Bind parameters to the SQL query
        $stmt->bind_param("sss", $email, $name, $message);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>alert('Message sent successfully!');</script>";
        } else {
            echo "<script>alert('There was an error, please try again later.');</script>";
        }

        // Close the statement
        $stmt->close();
    }

    // Close the database connection
    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../../style/contactus.css">
  <link rel="stylesheet" href="../../style/header.css">
  <link rel="stylesheet" href="../../style/footer.css">
  <style>
    /* Ensure full height of the page */
    .contact-container {
    min-height: calc(100vh - 100px); /* Adjust 100px to match the header and footer height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    width: 90%; /* Increased width */
    margin: 0 auto;
    max-width: 1200px; /* Optional: Max width for large screens */
}

form {
    width: 100%; /* Take the full width of the container */
    max-width: 800px; /* Optional: Restrict to a maximum width */
}

.form-group input,
.form-group textarea {
    width: 100%; /* Ensure inputs and textareas span the full width of the form */
    padding: 12px; /* Add padding for better usability */
    font-size: 16px; /* Increase font size for readability */
}

.send-button {
    width: 100%; /* Make the button span the full width */
    max-width: 200px; /* Optional: Restrict button width */
    margin-top: 10px; /* Add spacing above the button */
}

  </style>
</head>
<body>
<?php include '../common/header.php'; ?>

  <div class="contact-container">
    <h1>Contact Us</h1>
    <form method="POST" action="">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message" required></textarea>
      </div>
      <button type="submit" class="send-button">Send Message</button>
    </form>
  </div>

  <footer>
  <?php include '../common/footer.php'; ?>
  </footer>
</body>
</html>
