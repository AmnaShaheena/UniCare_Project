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
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/profilestyle.css">
   
</head>
<body>
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
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="features.html">Features</a>
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

    <!-- Hero Section -->
    <section class="hero bg-light text-center text-white d-flex justify-content-center align-items-center">
        <div class="container">
            <h1 class="display-4"><strong>Welcome to UniCare</strong></h1>
            <p class="lead">Your One-Stop Solution for University Support and Academic Management</p>
        </div>
        <!--<img src="../images/Vavuniya.png" alt="Hero Image" class="img-fluid mt-3"> -->
    </section>
    
    <!-- Call to Action Section -->
    <section class="cta-section text-white py-5">
        <div class="container text-center">
            <h3>Ready to Simplify Your University Life?</h3>
            <p class="mb-4">Join thousands of students who are already using UniCare for a better experience.</p>
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
