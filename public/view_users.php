<?php
include('includes/config.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<table class='table'>";
echo "<thead><tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>Mobile</th><th>Actions</th></tr></thead><tbody>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['middle_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['mobile'] . "</td>
                <td><a href='edit_user.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_user.php?id=" . $row['id'] . "'>Delete</a></td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No users found.";
}
?>
