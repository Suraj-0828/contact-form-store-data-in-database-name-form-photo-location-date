<?php
$servername = "localhost";
$username = "root";
$password = ""; // Update if your MySQL has a password
$dbname = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("Location: failed.php");
    exit();
}

// Sanitize and get form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$date_of_birth = $conn->real_escape_string($_POST['date']);
$message = $conn->real_escape_string($_POST['message']);
$latitude = $conn->real_escape_string($_POST['latitude']);
$longitude = $conn->real_escape_string($_POST['longitude']);

// Handle photo upload
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $photo = file_get_contents($_FILES['photo']['tmp_name']);
    $photo = $conn->real_escape_string($photo);
} else {
    header("Location: failed.php");
    exit();
}

// Insert data
$sql = "INSERT INTO contact_requests 
    (name, email, phone, date_of_birth, message, latitude, longitude, photo)
    VALUES 
    ('$name', '$email', '$phone', '$date_of_birth', '$message', '$latitude', '$longitude', '$photo')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
    exit();
} else {
    header("Location: failed.php");
    exit();
}

$conn->close();
?>
