<?php
$servername = "localhost";
$username = "root";
$password = "console";
$dbname = "dmkDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
