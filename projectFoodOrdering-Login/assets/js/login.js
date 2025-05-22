// Select the elements for the eye icon and password field
const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#password");

// Add an event listener to toggle the password visibility
showPassword.addEventListener("click", function() {
    // Toggle the eye icon class to change the icon
    this.classList.toggle("fa-eye-slash");

    // Toggle the type attribute between 'password' and 'text'
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
});

const showPassword1 = document.querySelector("#show-password1");
const passwordField1 = document.querySelector("#password1");

//Add an event listener to toggle the password visibility
showPassword1.addEventListener("click", function() {
    // Toggle the eye icon class to change the icon
    this.classList.toggle("fa-eye-slash");
    
    // Toggle the type attribute between 'password' and 'text'
    const type = passwordField1.getAttribute("type") === "password" ? "text" : "password";
    passwordField1.setAttribute("type", type);
});


