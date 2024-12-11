<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../style/features.css">
    <link rel="stylesheet" href="../../style/header.css">
</head>
<body>
    <?php include '../common/header.html'; ?>

     <!-- Features Section -->
  <section class="features py-5">
    <div class="row text-center centered-row">
        <!-- First three cards -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Editable Templates</h5>
                    <p class="card-text">Access customizable templates for official letters, scholarship applications, and more.</p>
                    <a href="templates.php" class="btn custom-btn">Explore Templates</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">GPA Calculator</h5>
                    <p class="card-text">Calculate your GPA easily with our intuitive tool, designed to help you track progress.</p>
                    <a href="gpa.php" class="btn custom-btn">Check GPA</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Scholarship Guidance</h5>
                    <p class="card-text">Explore scholarship opportunities with eligibility, deadlines, and details.</p>
                    <a href="scholarships.php" class="btn custom-btn">View Scholarships</a>
                </div>
            </div>
        </div>
    
        <!-- Last two cards (centered) -->
        <div class="col-md-4 offset-md-2">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Emergency Assistance</h5>
                    <p class="card-text">Quick access to emergency contacts for campus security and health services.</p>
                    <a href="emergency.html" class="btn custom-btn">Get Help</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Support Services</h5>
                    <p class="card-text">Find assistance for administrative tasks, document submission, and more.</p>
                    <a href="support.html" class="btn custom-btn">Get Support</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section1 text-white py-5" >
  <div class="container text-center">
  </div>
</section>
   <!-- Footer -->
   <?php include '../common/footer.html'; ?>

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JavaScript to Set User Email -->
    <script src="profilescript.js"></script>
</body>
</html>
