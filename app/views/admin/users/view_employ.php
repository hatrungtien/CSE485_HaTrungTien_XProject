<?php
// Kiểm tra và lấy ID của nhân viên từ tham số trên URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $employee_id = $_GET['id'];

    // Kết nối tới CSDL
    $servername = "localhost";
    $username = "";
    $password = "your_password";
    $dbname = "XProject";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Truy vấn CSDL để lấy thông tin chi tiết của nhân viên
    $sql = "SELECT * FROM employees WHERE id = $employee_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Salary: " . $row["salary"] . "<br>";
    } else {
        echo "Employee not found.";
    }
    $conn->close();
} else {
    echo "Invalid employee ID.";
}
?>
<p><a href="index.php">Back to Employee List</a></p>
