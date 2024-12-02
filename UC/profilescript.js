 // Store the user email on login (simulate with localStorage)
 function setUserEmail() {
    // Example: Simulate the email being entered by the user
    const email = prompt("Please enter your email");  // Simulate email input for demo purposes
    if (email) {
        localStorage.setItem("userEmail", email);  // Store email in localStorage
    }
}

function login(email, password) {
    // Example of login validation and saving to localStorage
    if (email && password) {
        localStorage.setItem("userEmail", email); // Save the email to localStorage
        window.location.href = "home.html"; // Redirect to homepage
    } else {
        alert("Invalid login details");
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const userEmail = localStorage.getItem("userEmail"); // Retrieve email
    const userEmailDisplay = document.getElementById("userEmail");
    
    // Check if email exists and update the dropdown
    if (userEmail) {
        userEmailDisplay.textContent = userEmail;
    } else {
        userEmailDisplay.textContent = "Guest";
    }
});

function logout() {
    localStorage.removeItem("userEmail"); // Clear stored email
    window.location.href = 'login.html';  // Redirect to login page
}