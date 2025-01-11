<?php
$servername = "localhost";
$username = "root"; // Thay bằng username MySQL
$password = "";     // Thay bằng mật khẩu MySQL
$dbname = "vtqmysqli"; // Thay bằng tên database của bạn

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    echo("Kết nối thất bại: " . mysqli_connect_error());
}

?>