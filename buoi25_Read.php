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
//asendent
//descendent
// $page = 3;
// $student_per_page = 3;
// $start = ($page - 1 ) * $student_per_page;

// $sql = "SELECT * FROM student LIMIT $start, $student_per_page"; // LIMIT dùng để phân trang

// $sql = "SELECT * FROM student"; // lấy tất cả  các cột trong bảng student(không liên quan tới dòng)
// $sql = "SELECT firstname FROM student ";
// $sql = "SELECT * FROM  student where id IN (1, 4)"; // lấy ra dòng số 1 và 4
 // $sql = "SELECT *FROM student ORDER BY firstname ASC"; // sắp xếp theo thứ tự tăng dần ASC là tăng dần DESC (giảm dần)


$sql = "SELECT * FROM student WHERE firstname LIKE '%a%'"; // LIKE là giống tìm ở cột fn có kí tự a hiển thị ra % có nghĩa là trước đó gì củng được sau đó gì củng được

$sql = "SELECT employee.* ,department.name AS dept_name FROM  employee LEFT JOIN department ON employee.dept_id = department.dept_id";
// lấy tất cả các cột của 1 bảng emplpyee.*
// AS là đổi tên cột thành dept_name employee.* là lấy tất cả các cột trong bảng employee
// employee.* là * của 1 bảng

$sql = "SELECT emp.* ,dep.name AS dept_name FROM  employee emp LEFT JOIN department dep ON emp.dept_id = dep.dept_id";
// đổi tên bang không dùng AS chỉ dùng dấu cách
$result = $conn->query($sql);  // gửi chuổi của biến $sql xuống database
if ($result->num_rows > 0) {
    // output data of each row
    // false: false, 0, "", null
    while($row = $result->fetch_assoc()) { // fetch_assoc lấy 1 dòng
       var_dump($row);
    }
} else {
    echo "0 results";
}

$conn->close();
?>
