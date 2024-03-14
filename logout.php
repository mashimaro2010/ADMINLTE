<?php
session_start();

// ยกเลิกเซสชันและออกจากระบบ
session_destroy();

header("Location: login.php"); // ไปยังหน้าล็อกอินหลังจากออกจากระบบ
exit();
?>