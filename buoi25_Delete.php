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


// Lệnh xóa
$sql = "DELETE FROM student WHERE id = 2";
// Thực hiện delete
if ($conn->query($sql) === TRUE) {
    echo "Delete thành công";
} else {
    echo "Delete thất bại: " . $conn->error;
}


$conn->close();
 ?>