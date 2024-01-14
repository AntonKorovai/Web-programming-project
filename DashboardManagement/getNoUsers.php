<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookShop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to count the number of books
$sql = "SELECT COUNT(*) AS userCount FROM User";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $userCount = $row['userCount'];

    // Output the result
    echo "<p class = \"statsNo\">$userCount</p>";
} else {
    // Handle the case where the query fails
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>