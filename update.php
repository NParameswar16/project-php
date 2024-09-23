<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice1";

// Check if form data is set
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["mobile"])) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $email = $_POST["email"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $mobile = $_POST["mobile"];

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Update record in the database
    $sql = "UPDATE emp5 SET name='$name', dob ='$date', mobile ='$mobile' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Form data is not set";
}
?>