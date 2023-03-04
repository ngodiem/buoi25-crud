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

// Lệnh update
$sql = "UPDATE student SET email='x@gmail.com', firstname='Con mèo' WHERE id=1";
// Thực hiện update
if ($conn->query($sql)) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
$conn->close();
 ?>