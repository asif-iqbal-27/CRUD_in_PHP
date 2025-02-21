// JavaScript Validation Function
function validateForm() {
    // Get form fields
    const firstName = document.getElementById('first_name').value;
    const middleName = document.getElementById('middle_name').value;
    const lastName = document.getElementById('last_name').value;
    const email = document.getElementById('email').value;
    const mobile = document.getElementById('mobile').value;
    const zipCode = document.getElementById('zip_code').value;
    const maritalStatus = document.getElementById('marital_status').value;
    const dob = document.getElementById('dob').value;
    const address = document.getElementById('address').value;
    const city = document.getElementById('city').value;
    const state = document.getElementById('state').value;
    const country = document.getElementById('country').value;

    // Check if First Name, Last Name, Email, Mobile Number, Address, City, State, and Country are filled
    if (firstName === "" || lastName === "" || email === "" || mobile === "" || address === "" || city === "" || state === "" || country === "") {
        alert("Please fill in all required fields.");
        return false;
    }

    // Check if email is valid
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Check if mobile number is numeric
    if (isNaN(mobile)) {
        alert("Please enter a valid mobile number.");
        return false;
    }

    // Check if ZIP code is numeric
    if (isNaN(zipCode)) {
        alert("Please enter a valid ZIP code.");
        return false;
    }

    // Check if Marital Status is selected
    if (maritalStatus === "") {
        alert("Please select your marital status.");
        return false;
    }

    // Check if Date of Birth is filled
    if (dob === "") {
        alert("Please select your date of birth.");
        return false;
    }

    // If all validations pass
    return true;
}
