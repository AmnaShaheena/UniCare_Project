<?php
// Start the session
session_start();

// Retrieve the email from the session
$userEmail = isset($_SESSION['userEmail']) ? $_SESSION['userEmail'] : "No email available";
?>