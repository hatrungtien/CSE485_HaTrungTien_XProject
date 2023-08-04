<?php
// user.php

// Hàm kết nối tới CSDL
function connectDatabase()
{
    $hostname = 'localhost'; // Thay localhost bằng host của MySQL nếu cần thiết
    $username = 'your_username';
    $password = 'your_password';
    $database = 'XProject'; // Thay your_database_name bằng tên CSDL của bạn

    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Hàm lấy danh sách người dùng
function getUsers()
{
    $conn = connectDatabase();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    $conn->close();
    return $users;
}

// Hàm lấy thông tin người dùng bằng ID
function getUserById($id)
{
    $conn = connectDatabase();
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $conn->close();
        return $user;
    } else {
        $conn->close();
        return null;
    }
}

// Hàm thêm người dùng mới
function addUser($name, $email, $password)
{
    $conn = connectDatabase();
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}

// Hàm cập nhật thông tin người dùng
function updateUser($id, $name, $email, $password)
{
    $conn = connectDatabase();
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=$id";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}

// Hàm xóa người dùng
function deleteUser($id)
{
    $conn = connectDatabase();
    $sql = "DELETE FROM users WHERE id = $id";
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}
?>
