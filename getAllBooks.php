<?php
session_start();
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookShop";

$Counter = 0;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#$sqlUser = "SELECT UserID FROM User where Username = $Sessionusername";
#$resultUser = $conn->query($sqlUser);

#$rowUser = $resultUser->fetch_assoc();


// SQL query to retrieve books data for a specific user
$sql = "SELECT * FROM Book";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output the HTML table header
    echo "<table border='1'>";
    echo "<tr><th>Author</th><th>Title</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $Counter++;
        echo "<tr data-value = \"$Counter\" class  =\"BookTableRow\">";
        echo "<td>" . $row["Author"] . "</td>";
        echo "<td>" . $row["Title"] . "</td>";
        echo "<td><button onclick=\"addToDatabase(this)\">Add</button></td>";
        echo "</tr>";
    }

    // Close the HTML table
    echo "</table>";
} else {
    echo "<h1>No books found.</h1>";
}

// Close the database connection
$conn->close();
?>