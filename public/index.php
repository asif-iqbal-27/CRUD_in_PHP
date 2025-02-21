<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include('../includes/header.php'); ?>

<div class="container">
    <!-- Logo Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-12 text-center">
            <!-- Adjust the logo path as needed -->
            <img src="../assets/images/loho.jpg" alt="Institute Logo" class="img-fluid" style="max-width: 150px;">
        </div>
    </div>

    <!-- Registration Form -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Employee Registration Form</h4>
                    <p>Please fill out the form for HR department to complete your registration. An HR manager will contact you with further instructions.</p>
                </div>
                <div class="card-body">
                    <form action="../php/process_registration.php" method="POST" onsubmit="return validateForm()">
                        <!-- Personal Information Section -->
                        <div class="mb-4">
                            <h5>Personal Information</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="marital_status">Marital Status</label>
                                <select class="form-control" id="marital_status" name="marital_status" required>
                                    <option value="">Select</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="mb-4">
                            <h5>Contact Information</h5>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
                            </div>
                        </div>

                        <!-- Address Section -->
                        <div class="mb-4">
                            <h5>Address</h5>
                            <div class="form-group">
                                <label for="address">Street Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Street Address" required>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required>
                            </div>
                            <div class="form-group">
                                <label for="state">State / Province</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter State / Province" required>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" required>
                            </div>
                            <div class="form-group">
                                <label for="zip_code">ZIP Code</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Enter ZIP Code" required>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-block">Register Me</button>
                    </form>

                    <!-- Show Employee Button -->
                    <a href="../php/view_users.php" class="btn btn-secondary btn-block mt-3">Show Employees</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>

<!-- Bootstrap JS & Dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
