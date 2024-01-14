<?php
session_start();
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

// SQL query to retrieve the 5 latest entries from the database table
$sql = "SELECT * FROM Book  Order By BookID DESC LIMIT 5";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output the HTML table header
    echo "<table border='1'>";
    echo "<tr><th>Author</th><th>Title</th><th></th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Author"] . "</td>";
        echo "<td>" . $row["Title"] . "</td>";
        echo "<td><button onclick=\"addToDatabase(this)\">Add</button></td>";
        echo "</tr>";
    }

    // Close the HTML table
    echo "</table>";
} else {
    echo "No books found in the database.";
}

// Close the database connection
$conn->close();
?>