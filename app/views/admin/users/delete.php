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

    // Xóa nhân viên từ CSDL
    $sql = "DELETE FROM employees WHERE id = $employee_id";
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully.";
    } else {
        echo "Error deleting employee: " . $conn->error;
    }
    $conn->close();
} else {
    echo "Invalid employee ID.";
}
?>
<p><a href="index.php">Back to Employee List</a></p>

