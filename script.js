function validateForm() {
    let isValid = true;
  
    // Clear previous errors
    document.querySelectorAll('.error').forEach((error) => {
      error.style.display = 'none';
    });
  
    // Name validation
    const name = document.getElementById('name').value.trim();
    if (!name) {
      document.getElementById('nameError').textContent = 'Name is required.';
      document.getElementById('nameError').style.display = 'block';
      isValid = false;
    }
  
    // Email validation
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailPattern.test(email)) {
      document.getElementById('emailError').textContent = 'Valid email is required.';
      document.getElementById('emailError').style.display = 'block';
      isValid = false;
    }
  
    // Phone validation
    const phone = document.getElementById('phone').value.trim();
    const phonePattern = /^[0-9]{10}$/;
    if (!phone || !phonePattern.test(phone)) {
      document.getElementById('phoneError').textContent = 'Valid 10-digit phone number is required.';
      document.getElementById('phoneError').style.display = 'block';
      isValid = false;
    }
  
    // Gender validation
    const gender = document.getElementById('gender').value;
    if (!gender) {
      document.getElementById('genderError').textContent = 'Please select a gender.';
      document.getElementById('genderError').style.display = 'block';
      isValid = false;
    }
    // Add interactivity: Simple Form Validation
document.getElementById("registrationForm").addEventListener("submit", function (event) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const countryCode = document.getElementById("countryCode").value;
    const dob = document.getElementById("dob").value;
    const gender = document.getElementById("gender").value;
    const country = document.getElementById("country").value;

    if (!name || !email || !phone || !countryCode || !dob || !gender || !country) {
        alert("Please fill in all required fields.");
        event.preventDefault(); // Prevent form submission
    }
});
    return isValid;
  }
  