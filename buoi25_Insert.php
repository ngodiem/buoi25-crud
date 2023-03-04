<?php 
// Create connection
$servername = "127.0.0.1:3308";
$username= "root";
$password = "";
$dbname = "study_k34";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");

$sql = "INSERT INTO student (firstname, lastname, email)
VALUES ('Thắm', 'Pham', 'd@gmail.com')";

if ($conn->query($sql)) {
	// $last_id = $conn->insert_id;//chỉ cho auto increment
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>