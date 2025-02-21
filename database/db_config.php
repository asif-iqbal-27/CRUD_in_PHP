 
<?php
// Database connection settings
$_servername = "localhost"; // Usually "localhost" if you're using XAMPP or local MySQL server
$username = "root";        // Your MySQL username (default is "root")
$password = "";            // Your MySQL password (default is empty in XAMPP)
$dbname = "registration_system";  // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
echo "# cc" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/asif-iqbal-27/cc.git
git push -u origin main