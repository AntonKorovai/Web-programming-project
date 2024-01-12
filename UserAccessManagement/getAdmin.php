<?php
session_start();
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookShop";


if (isset($_SESSION["username"])) {
    $Sessionusername = $_SESSION['username'];
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#$sqlUser = "SELECT UserID FROM User where Username = $Sessionusername";
#$resultUser = $conn->query($sqlUser);

#$rowUser = $resultUser->fetch_assoc();
#$user_id = $rowUser["UserID"];

// SQL query to retrieve books data for a specific user
$sql = "SELECT * FROM User WHERE Username = '$Sessionusername'";
$result = $conn->query($sql);

// Check if there are results
if ($result) {
    // Output the HTML table header
    $row = $result->fetch_assoc();
    $userRole = $row['IsAdmin'];

    // Check if the user is an admin
    $isAdmin = ($userRole == '1');
}

if (isset($isAdmin) && $isAdmin) {
    echo ("<a href=\"http://localhost/bookrepo/dashboardPage.php\" class=\"HNavigationMenuButton\">DashBoard</a>");
}

// Close the database connection
$conn->close();
?>