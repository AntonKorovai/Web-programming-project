<?php
session_start();
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form when it is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM `User` WHERE Username = '$username' AND Password = '$password'";
    // Prepare and execute the SQL SELECT query
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        $message = "Loggin Successfull!";
        echo "<script>window.location.href = '../index.php';
        alert('$message');
        </script>";
        exit();

    } else {
        $message = "Invalid username or password";
        echo "<script>window.location.href = '../index.php';
        alert('$message');</script>";
        exit();
    }
}

// Close the database connection
$conn->close();
?>