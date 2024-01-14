<?php
session_start();
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookShop";


if (isset($_SESSION["username"])) {
    $Sessionusername = $_SESSION['username'];
} else {
    echo "<p class = \" HtagMyBookPage\">Login or register to get your books.</p>";
    exit();
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$usernameToSearch = $_SESSION['username'];

// Query to retrieve userID based on the provided username
$userQuery = "SELECT userID FROM `User` WHERE Username = '$usernameToSearch'";
$userResult = $conn->query($userQuery);
if ($userResult->num_rows > 0) {
    // Fetch the userID
    $row = $userResult->fetch_assoc();
    $userID = $row['userID'];
    $sql = "SELECT * FROM Library WHERE UserID = $userID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Author</th><th>Title</th></tr>";
        while ($rowLibrary = $result->fetch_assoc()) {
            $bookID = $rowLibrary['BookID'];
            $bookQuery = "SELECT * FROM Book WHERE BookID = '$bookID'";
            $bookResult = $conn->query($bookQuery);
            $rowBook = $bookResult->fetch_assoc();
            echo "<tr class =\"BookTableRow\">";
            echo "<td>" . $rowBook["Author"] . "</td>";
            echo "<td>" . $rowBook["Title"] . "</td>";
            echo "</tr>";

        }
        echo "</table>";
    } else {
        echo "<p>No books found for the user.</p>";
    }

} else {
    echo "<p>UserNotFound.</p>";
}


// Check if there are results


// Close the database connection
$conn->close();
?>