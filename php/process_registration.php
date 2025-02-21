<?php
// Database connection
include('../includes/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $marital_status = mysqli_real_escape_string($conn, $_POST['marital_status']);
    $dob = $_POST['dob'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);
    strlen();
    // Insert user information into the users table
    $sql_user = "INSERT INTO users (first_name, middle_name, last_name, marital_status, date_of_birth)
                 VALUES ('$first_name', '$middle_name', '$last_name', '$marital_status', '$dob')";

    if ($conn->query($sql_user) === TRUE) {
        $user_id = $conn->insert_id; // Get the last inserted user's ID

        // Insert contact information into the contacts table
        $sql_contact = "INSERT INTO contacts (user_id, email, mobile)
                        VALUES ('$user_id', '$email', '$mobile')";

        // Insert address information into the addresses table
        $sql_address = "INSERT INTO addresses (user_id, street_address, city, state_province, country, zip_code)
                        VALUES ('$user_id', '$address', '$city', '$state', '$country', '$zip_code')";

        // Execute the queries
        if ($conn->query($sql_contact) === TRUE && $conn->query($sql_address) === TRUE) {
            // Registration Successful, now show a pop-up and redirect to index.php
            echo "<script type='text/javascript'>
                    alert('Registration Successful! Your details have been saved.');
                    window.location.href = '../public/index.php';  // Redirect to index.php after 2 seconds
                  </script>";
            exit();  // Ensure that no further code is executed after the redirect
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
