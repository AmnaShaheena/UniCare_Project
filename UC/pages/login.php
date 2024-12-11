<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni Care Sign In</title>
    <!-- Bootstrap and Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style/login.css">
</head>
<body>

<div class="container">
    <div class="left">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="../../images/UClogo.png" width="200" height="200" alt="UniCare Logo" class="me-2">      
        </a>
        <strong class="unicare">UniCare</strong>
    </div>
    <div class="right">
        <h2>Sign in</h2>

        <div id="error-message" class="error-message">Incorrect email or password. Please try again.</div>

        <form onsubmit="loginUser(event)">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password">
                <i class="fas fa-eye show-password" onclick="togglePassword()"></i>
            </div>
            <button type="submit" class="signin-button" disabled>Sign in</button>
        </form>

        <div class="divider">
            <span>OR</span>
        </div>

        <div class="social-buttons">
            <button class="apple"><i class="bi bi-apple"></i>   Apple</button>
            <button class="facebook"><i class="bi bi-facebook"></i>   Facebook</button>
            <button class="google"><i class="bi bi-google"></i>   Google</button>
        </div>

        <div class="signup-link">
            <p>Don't have an account? <a href="signup.php" class="text-warning">Sign up</a></p>
            <p><a href="reset.php" class="text-muted">Forgotten password?</a></p>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const showPasswordText = document.querySelector('.show-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            showPasswordText.textContent = 'Hide';
        } else {
            passwordField.type = 'password';
            showPasswordText.textContent = 'Show';
        }
    }

    document.getElementById('email').addEventListener('input', toggleButton);
    document.getElementById('password').addEventListener('input', toggleButton);

    function toggleButton() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        document.querySelector('.signin-button').disabled = !(email && password);
    }

    function loginUser(event) {
        event.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const storedEmails = JSON.parse(localStorage.getItem('userEmails')) || [];
        const storedPassword = localStorage.getItem('userPassword');
        const errorMessage = document.getElementById('error-message');

        // Check if the email exists in the stored list of emails
        if (storedEmails.includes(email)) {
            // Check if the entered password matches the stored password for the registered email
            if (storedPassword === password) {
                errorMessage.style.display = 'none';
                localStorage.setItem('userEmail', email); // Save email to display on home page
                window.location.href = 'home.html';
            } else {
                errorMessage.style.display = 'block';
            }
        } else {
            errorMessage.style.display = 'block';
        }
    }
</script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
