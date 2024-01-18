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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve book ID from the form submission
    $UserID = $_POST['user_id'];

    // SQL query to delete the book from the database
    $sql = "DELETE FROM User WHERE UserID = $UserID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        $message = "The user was deleted successfully!";
        echo "<script>window.location.href = '../dashBoardPage.php';
        alert('$message');</script>";
    } else {
        echo "Error deleting book: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>