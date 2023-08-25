document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggle-button");
    const loginForm = document.getElementById("login-form");
    const signupForm = document.getElementById("signup-form");

    toggleButton.addEventListener("click", function () {
        loginForm.classList.toggle("active");
        signupForm.classList.toggle("active");
    });
});
