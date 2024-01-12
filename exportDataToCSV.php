<?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "BookShop";
$table = $_POST['Table']; // Replace with your actual table name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Output CSV headers
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="exported_data.csv"');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');


// Open output stream
$output = fopen('exported_data.csv', 'w');

// Fetch data from the database
$result = $conn->query("SELECT * FROM $table");

// Output CSV column headers
$fields = mysqli_fetch_fields($result);
$columnHeaders = array();
foreach ($fields as $field) {
    $columnHeaders[] = $field->name;
}
fputcsv($output, $columnHeaders);

// Output data
while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

// Close the output stream
fclose($output);

// Close the connection
$conn->close();
?>