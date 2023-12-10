document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get input values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Password length validation
    if (password.length < 8) {
        var errorMessage = document.getElementById("error-message");
        errorMessage.textContent = "Password should be at least 8 characters long.";
        return; // Stop further execution if validation fails
    }

    // Example validation (Replace this with your own validation logic)
    if (username === "username" && password === "password") {
        // Successful login
        alert("Login successful!");
        // You can redirect or perform other actions after successful login
    } else {
        // Failed login
        var errorMessage = document.getElementById("error-message");
        errorMessage.textContent = "Invalid username or password.";
    }
});

const signupForm = document.getElementById('signupForm');

signupForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the form from submitting

    // Get form input values
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Validation checks
    if (firstName === '') {
        showError('Please enter your first name');
    } else if (lastName === '') {
        showError('Please enter your last name');
    } else if (email === '') {
        showError('Please enter your email');
    } else if (!isValidEmail(email)) {
        showError('Please enter a valid email address');
    } else if (password === '') {
        showError('Please enter a password');
    } else if (password.length < 8) {
        showError('Password should be at least 8 characters');
    } else if (confirmPassword === '') {
        showError('Please confirm your password');
    } else if (password !== confirmPassword) {
        showError('Passwords do not match');
    } else {
        alert('Form submitted successfully!');
    }
});


function showError(message) {
    const errorMessage = document.getElementById('error-message');
    errorMessage.textContent = message;
}


function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
