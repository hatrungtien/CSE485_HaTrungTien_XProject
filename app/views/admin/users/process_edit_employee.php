<?php
// Kiểm tra dữ liệu và cập nhật thông tin của nhân viên trong CSDL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    // Kết nối tới CSDL
    $servername = "localhost";
    $username = "";
    $password = "your_password";
    $dbname = "XProject";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Cập nhật thông tin nhân viên trong CSDL
    $sql = "UPDATE employees SET name='$name', address='$address', salary=$salary WHERE id=$employee_id";
    if ($conn->query($sql) === TRUE) {
        echo "Employee information updated successfully.";
    } else {
        echo "Error updating employee information: " . $conn->error;
    }
    $conn->close();
}
?>
<p><a href="index.php">Back to Employee List</a></p>
