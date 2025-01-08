<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergency Assistance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Ensure full height of the page */
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

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

    footer {
        width: 100%;
        position: relative;
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 10px 0;
    }
  </style>
</head>
<body>
<?php include '../common/header.php'; ?>

<div class="container mt-5">
  <h1 class="text-center mb-4">Emergency Assistance</h1>
  <p class="text-center">Quick access to emergency contacts for campus security, health services, and administrative support.</p>

  <div class="row g-4">
      <div class="col-md-6">
          <div class="card shadow-sm">
              <div class="card-body">
                  <h5 class="card-title">Assistant Registrar</h5>
                  <p class="card-text">For administrative assistance, contact the Assistant Registrar.</p>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">Hotline: <strong>+94 11 123 4567</strong></li>
                      <li class="list-group-item">Office: <strong>+94 11 765 4321</strong></li>
                      <li class="list-group-item">Email: <strong> director.registrar@university.edu</strong></li>
                  </ul>
                  <a href="tel:+94111234567" class="btn btn-danger mt-3 w-100">Contact Assistant Registrar</a>
              </div>
          </div>
      </div>
     
      <div class="col-md-6">
          <div class="card shadow-sm">
              <div class="card-body">
                  <h5 class="card-title">Deputy Registrar</h5>
                  <p class="card-text">Reach out to the Director of Registrar for higher-level administrative issues.</p>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">Hotline: <strong>+94 11 234 5678</strong></li>
                      <li class="list-group-item">Office: <strong>+94 11 876 5432</strong></li>
                      <li class="list-group-item">Email: <strong>director.registrar@university.edu</strong></li>
                  </ul>
                  <a href="tel:+94112345678" class="btn btn-danger mt-3 w-100">Contact Director of Registrar</a>
              </div>
          </div>
      </div>
  </div>
</div>

<footer class="bg-white text-white text-center py-5"> </footer>
<?php include '../common/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
