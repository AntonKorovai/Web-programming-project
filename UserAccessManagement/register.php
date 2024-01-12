<?php
session_start();
$_SESSION['username'] = "";
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

// Process the form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $regDate = date("d/m/Y");
    // Hash the password (for security)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO User (Username, Password, RegDate) VALUES ('$username', '$password', '$regDate')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        $message = "Registration successful!";
        echo "<script>window.location.href = '../index.php';
        document.querySelector('.accessWrapper').setAttribute('id', 'Registered');
        alert('$message');</script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close the database connection
$conn->close();
?>