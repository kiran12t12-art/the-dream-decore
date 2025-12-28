<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybackend";
$port = 3307; // <- This is the key change!

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Get form data
$firstName = $conn->real_escape_string($_POST['firstName']);
$lastName = $conn->real_escape_string($_POST['lastName']);
$email = $conn->real_escape_string($_POST['email']);
$number = $conn->real_escape_string($_POST['number']);
$comment = $conn->real_escape_string($_POST['comment']);

// Insert into login table
$sql = "INSERT INTO `login` (`NAME`, `LAST NAME`, `EMAIL`, `PHONE NO`, `comment`) 
        VALUES ('$firstName', '$lastName', '$email', '$number', '$comment')";

if ($conn->query($sql) === TRUE) {
  // Redirect to thank you page
  header("Location:thankyou.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
