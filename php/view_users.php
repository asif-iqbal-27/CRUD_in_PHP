<?php
// Database connection
include('../includes/config.php');

// Fetch all registered users from the database
$sql = "SELECT users.id, users.first_name, users.middle_name, users.last_name, contacts.email, contacts.mobile 
        FROM users 
        JOIN contacts ON users.id = contacts.user_id";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Employees</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="text-center">Registered Employees</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['first_name'] . "</td>
                            <td>" . $row['middle_name'] . "</td>
                            <td>" . $row['last_name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['mobile'] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>No employees registered yet.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="../public/index.php" class="btn btn-primary">Back to Registration</a>
</div>

</body>
</html>
