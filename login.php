<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice1";

$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$mobile = $_POST["mobile"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, dob, mobile FROM emp5 where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["name"]. " " . $row["dob"]. " " . $row["mobile"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
