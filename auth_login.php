<?php
session_start();

// ตั้งค่า username และ password ที่ถูกต้อง
$correct_username = 'admin';
$correct_password = 'password123';

// ตรวจสอบว่ามีการส่งข้อมูลมาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['DataCenterUserName'];
    $password = $_POST['DataCenterPassword'];

    // ตรวจสอบ username และ password
    if ($username == $correct_username && $password == $correct_password) {
        // หากถูกต้อง, สร้าง session และ redirect ไปยังหน้า dashboard
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; // หรือ ID ของผู้ใช้
        header("Location: index.php");
        exit;
    } else {
        // หากผิดพลาด, แสดงข้อความแจ้งเตือน
        echo 'Incorrect username or password';
    }
}
?>