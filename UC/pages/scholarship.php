<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholarship Guidance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .scholarship-header {
      text-align: center;
      margin-bottom: 40px;
      padding: 20px 0;
      background-color: #f8f9fa;
    }

    .scholarship-header h1 {
      font-size: 2.5rem;
      color: #b04c35;
    }

    .scholarship-card {
      border: 1px solid #e2c5b8;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .scholarship-card:hover {
      transform: translateY(-5px);
    }

    .scholarship-card h5 {
      color: #5a2c1c;
    }

    .scholarship-card p {
      color: #333;
    }

    .btn-apply {
      background-color: #b04c35;
      color: #fff;
      border: none;
      transition: background-color 0.3s ease-in-out;
    }

    .btn-apply:hover {
      background-color: #8a3726;
    }
  </style>
</head>
<body>
<?php include '../common/header.php'; ?>
  <div class="container mt-5">
    <!-- Page Header -->
    <div class="scholarship-header">
      <h1>Scholarship Guidance</h1>
      <p>Explore scholarship opportunities with eligibility criteria, deadlines, and more.</p>
    </div>

    <!-- Scholarship Cards -->
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card scholarship-card">
          <div class="card-body text-center">
            <h5 class="card-title">Merit-Based Scholarship</h5>
            <p class="card-text">Awarded to students with outstanding academic performance. Deadline: 30th June 2025.</p>
            <button class="btn btn-apply">Apply Now</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card scholarship-card">
          <div class="card-body text-center">
            <h5 class="card-title">Need-Based Scholarship</h5>
            <p class="card-text">Designed for students who demonstrate financial need. Deadline: 15th July 2025.</p>
            <button class="btn btn-apply">Apply Now</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card scholarship-card">
          <div class="card-body text-center">
            <h5 class="card-title">International Students Scholarship</h5>
            <p class="card-text">Open to students from abroad pursuing higher education. Deadline: 10th August 2025.</p>
            <button class="btn btn-apply">Apply Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white text-white text-center py-5"> </footer>
  <?php include '../common/footer.php'; ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
