<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergency Assistance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .emergency-header {
      text-align: center;
      margin-bottom: 40px;
      padding: 20px 0;
      background-color: #f8f9fa;
    }

    .emergency-header h1 {
      font-size: 2.5rem;
      color: #b04c35;
    }

    .emergency-card {
      border: 1px solid #e2c5b8;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .emergency-card:hover {
      transform: translateY(-5px);
    }

    .emergency-card h5 {
      color: #5a2c1c;
    }

    .emergency-card p {
      color: #333;
    }

    .btn-help {
      background-color: #b04c35;
      color: #fff;
      border: none;
      transition: background-color 0.3s ease-in-out;
    }

    .btn-help:hover {
      background-color: #8a3726;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <!-- Page Header -->
    <div class="emergency-header">
      <h1>Emergency Assistance</h1>
      <p>Quick access to emergency contacts for campus security, health services, and more.</p>
    </div>

    <!-- Emergency Assistance Cards -->
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card emergency-card">
          <div class="card-body text-center">
            <h5 class="card-title">Campus Security</h5>
            <p class="card-text">Contact campus security for urgent safety concerns. Available 24/7.</p>
            <button class="btn btn-help">Get Help</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card emergency-card">
          <div class="card-body text-center">
            <h5 class="card-title">Health Services</h5>
            <p class="card-text">Reach out to campus health services for medical emergencies or advice.</p>
            <button class="btn btn-help">Get Help</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card emergency-card">
          <div class="card-body text-center">
            <h5 class="card-title">Mental Health Support</h5>
            <p class="card-text">Access mental health resources and counseling for immediate support.</p>
            <button class="btn btn-help">Get Help</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>© 2024 UniCare. All rights reserved.</p>
    <p>Contact Us: support@unicare.com</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
