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
    <link rel="stylesheet" href="templates.css">
    <link rel="stylesheet" href="profilestyle.css">
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
                        <a class="nav-link " href="home.php">Home</a>
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

    <div class="container mt-5">
        <h2>Select a Letter Template</h2>
        
        <!-- Template Selection Buttons -->
        <div class="btn-group" role="group">
            <button class="btn1 btn-primary" onclick="loadTemplate(medicalTemplate)">Medical Leave Letter</button>
            <button class="btn2 btn-primary" onclick="loadTemplate(attendanceTemplate)">Attendance Excuse Letter</button>
            <button class="btn3 btn-primary" onclick="loadTemplate(accommodationTemplate)">Hostel Accommodation</button>
        </div>
        
        <!-- Editable Text Area for Letter Content -->
        <div class="mt-4">
            <h3>Letter Content</h3>
            <textarea id="letterContent" class="form-control" rows="10"></textarea>
        </div>

        <!-- Download Button -->
        <button class="btn btn-success mt-3" onclick="downloadLetter()">Download Letter</button>
    </div>
    
 
</section>
<section class="cta-section1 text-white py-3" >
  <div class="container text-center">
  </div>
</section>
  </section>
  <section class="cta-section text-white py-4" >
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

     <!-- Load Templates from External JavaScript File -->
     <script src="templates.js"></script>
    
    <!-- JavaScript to Set User Email -->
    <script src="profilescript.js"></script>
</body>
</html>
