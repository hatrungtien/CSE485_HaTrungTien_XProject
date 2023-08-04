<?php
// employee_model.php

// Hàm kết nối tới CSDL
function connectDatabase()
{
    $hostname = 'localhost'; // Thay localhost bằng host của MySQL nếu cần thiết
    $username = 'your_username';
    $password = 'your_password';
    $database = 'your_database_name'; // Thay your_database_name bằng tên CSDL của bạn

    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Hàm lấy danh sách nhân viên
function getEmployees()
{
    $conn = connectDatabase();
    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);

    $employees = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }
    }

    $conn->close();
    return $employees;
}

// Hàm lấy thông tin nhân viên bằng ID
function getEmployeeById($id)
{
    $conn = connectDatabase();
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $employee = $result->fetch_assoc();
        $conn->close();
        return $employee;
    } else {
        $conn->close();
        return null;
    }
}

// Hàm thêm nhân viên mới
function addEmployee($name, $address, $salary)
{
    $conn = connectDatabase();
    $name = $conn->real_escape_string($name);
    $address = $conn->real_escape_string($address);
    $salary = (float) $salary;

    $sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}

// Hàm cập nhật thông tin nhân viên
function updateEmployee($id, $name, $address, $salary)
{
    $conn = connectDatabase();
    $name = $conn->real_escape_string($name);
    $address = $conn->real_escape_string($address);
    $salary = (float) $salary;

    $sql = "UPDATE employees SET name='$name', address='$address', salary=$salary WHERE id=$id";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}

// Hàm xóa nhân viên
function deleteEmployee($id)
{
    $conn = connectDatabase();
    $sql = "DELETE FROM employees WHERE id = $id";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}
?>
