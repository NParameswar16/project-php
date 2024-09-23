<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="practice1";

$name=$_POST["name"];
$email=$_POST["email"];
$date=$_POST["date"];
$mobile=$_POST["mobile"];


// echo $name." ".$mail." ".$age;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

  $sql = "INSERT INTO emp5 (name, email, dob , mobile)
  VALUES ('$name', '$email', '$date' , '$mobile')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
