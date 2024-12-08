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
    <link rel="stylesheet" href="../style/features.css">
    <link rel="stylesheet" href="../style/profilestyle.css">
</head>
<body>
    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo and Brand Name -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="../images/UClogo.png" width="60" height="60" alt="UniCare Logo" class="me-2">
                <strong class="unicare">UniCare</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Features</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <!-- Profile Dropdown Button -->
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle profile-icon"></i>
                        </a>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li class="dropdown-header text-center" id="userEmail">User Email</li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a href="#" class="dropdown-item logout-btn" onclick="logout()">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   
    
     <!-- Features Section -->
  <section class="features py-5">
    <div class="row text-center centered-row">
        <!-- First three cards -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Editable Templates</h5>
                    <p class="card-text">Access customizable templates for official letters, scholarship applications, and more.</p>
                    <a href="templates.html" class="btn custom-btn">Explore Templates</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">GPA Calculator</h5>
                    <p class="card-text">Calculate your GPA easily with our intuitive tool, designed to help you track progress.</p>
                    <a href="gpa.html" class="btn custom-btn">Check GPA</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Scholarship Guidance</h5>
                    <p class="card-text">Explore scholarship opportunities with eligibility, deadlines, and details.</p>
                    <a href="scholarships.html" class="btn custom-btn">View Scholarships</a>
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
<section class="cta-section1 text-white py-3" >
  <div class="container text-center">
  </div>
  </section>
  <section class="cta-section text-white py-4">
    <div class="container text-center">
    </div>
</section>
    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">© 2024 UniCare. All rights reserved.</p>
            <p>Contact Us: <a href="mailto:support@unicare.com" class="text-white">support@unicare.com</a></p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JavaScript to Set User Email -->
    <script src="../script/profilescript.js"></script>
</body>
</html>
