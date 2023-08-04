<?php
// home_controller.php

// Gọi các file model cần sử dụng
require_once 'models/user_model.php';
require_once 'models/employee_model.php';

// Hàm hiển thị danh sách nhân viên
function index()
{
    // Gọi hàm trong employee_model.php để lấy danh sách nhân viên
    $employees = getEmployees();

    // Gọi hàm trong user_model.php để lấy danh sách người dùng
    $users = getUsers();

    // Load view để hiển thị dữ liệu
    require 'views/home/index.php';
}

// Hàm hiển thị thông tin cơ bản của ứng dụng
function about()
{
    // Load view để hiển thị trang "About"
    require 'views/home/about.php';
}
?>
