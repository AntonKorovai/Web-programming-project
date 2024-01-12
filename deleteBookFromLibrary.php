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
$title = $_POST['title'];
$author = $_POST['author'];

$usernameToSearch = $_SESSION['username'];

// Query to retrieve userID based on the provided username
$userQuery = "SELECT userID FROM `User` WHERE Username = '$usernameToSearch'";
$userResult = $conn->query($userQuery);
if ($userResult->num_rows > 0) {
    // Fetch the userID
    $row = $userResult->fetch_assoc();
    $userID = $row['userID'];
    $bookQuery = "SELECT BookID FROM Book WHERE Title = '$title' AND Author = '$author'";
    $bookResult = $conn->query($bookQuery);
    if ($bookResult->num_rows > 0) {
        $row = $bookResult->fetch_assoc();
        $bookID = $row['BookID'];
        $libraryDelete = "DELETE FROM Library WHERE BookID = '$bookID' AND UserID = $userID";
        if ($conn->query($libraryDelete) === TRUE) {
            $message = "Book deleted successfully!";
            echo "<script>window.location.href = 'myBooksPage.php';
                    alert('$message');</script>";
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<p>No books found.</p>";
    }

} else {
    echo "<p>UserNotFound.</p>";
}

$conn->close();
?>