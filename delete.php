<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice1";

// Check if 'fid1' parameter is set in $_POST array
if (!isset($_POST['email'])) {
    echo "Error: 'fid1' parameter is not set.";
    exit;
}

$email = $_POST['email'];

// Check if $id is empty
if (empty($email)) {
    echo "Error : ID is empty dont mess with our system we know how to code db validation .";
    exit;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID exists in the database
$sql_check = "SELECT * FROM emp5 WHERE email='$email'";
$result_check = $conn->query($sql_check);
if ($result_check->num_rows == 0) {
    echo "Error: ID not found in the database. go and register frist then try again hahahaha.";
    exit;
}

// Delete the record
$sql_delete = "DELETE FROM emp5 WHERE email='$email'";
if ($conn->query($sql_delete) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "you enterd wrong id go and cross check it Error deleting record: " . $conn->error;
}

$conn->close();
?>
