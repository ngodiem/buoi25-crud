<?php 
// Create connection
$servername = "127.0.0.1:3308";
$username= "root";
$password = "";
$dbname = "study_k34";
$conn = new mysqli($servername, $username, $password, $dbname); // tạo kết nối biến $conn đang giữ sự kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Kết nối thành công";
$conn->close();

 ?>