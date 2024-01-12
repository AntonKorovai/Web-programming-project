<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookShop";

// Assuming you have the username stored in the session
$SessionUsername = $_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve book details from the form submission
$title = $_POST['title'];
$author = $_POST['author'];


// Assuming you have the user ID stored in the session or retrieved it as needed
// If you haven't stored it in the session, you may need to retrieve it using a query similar to what you've done before

// SQL query to insert the new book into the database
$sql = "INSERT INTO Library (Author, Title, OwnerUsername) VALUES ('$author', '$title', '$SessionUsername')";





$usernameToSearch = $_SESSION['username'];

// Query to retrieve userID based on the provided username
$userQuery = "SELECT userID FROM `User` WHERE Username = '$usernameToSearch'";
$userResult = $conn->query($userQuery);
if ($userResult->num_rows > 0) {
    // Fetch the userID
    $row = $userResult->fetch_assoc();
    $userID = $row['userID'];
    $addDate = date("d/m/Y");
    $bookInsert = "INSERT INTO Book (Author, Title, AddDate) VALUES ('$author', '$title', '$addDate')";
    if ($conn->query($bookInsert) === TRUE) {
        $bookQuery = "SELECT BookID FROM Book WHERE Title = '$title' AND Author = '$author'";
        $bookResult = $conn->query($bookQuery);
        if ($bookResult->num_rows > 0) {
            $row = $bookResult->fetch_assoc();
            $bookID = $row['BookID'];
            $libraryInsert = "INSERT INTO Library (UserID, BookID) VALUES ('$userID', '$bookID')";
            if ($conn->query($libraryInsert) === TRUE) {
                $message = "Book added successfully!";
                echo "<script>window.location.href = 'myBooksPage.php';
                    alert('$message');</script>";
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<p>No books found for the user.</p>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }






} else {
    echo "<p>UserNotFound.</p>";
}


// Close the database connection
$conn->close();
?>