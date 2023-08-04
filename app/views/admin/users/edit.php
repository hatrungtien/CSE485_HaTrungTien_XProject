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
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="process_edit_employee.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" required><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" value="<?php echo $row['salary']; ?>" required><br>

        <input type="submit" value="Save Changes">
    </form>
    <p><a href="index.php">Back to Employee List</a></p>
</body>
</html>
<?php
    } else {
        echo "Employee not found.";
    }
    $conn->close();
} else {
    echo "Invalid employee ID.";
}
?>
