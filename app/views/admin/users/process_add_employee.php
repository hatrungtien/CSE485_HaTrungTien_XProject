<?php
// Kiểm tra dữ liệu và thêm nhân viên mới vào CSDL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Thêm nhân viên vào CSDL
    $sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";
    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully.";
    } else {
        echo "Error adding employee: " . $conn->error;
    }
    $conn->close();
}
?>
<p><a href="index.php">Back to Employee List</a></p>
