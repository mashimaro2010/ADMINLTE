<?php
if (isset($_POST['Mark'])) {
    $Mark = $_POST['Mark'];
    // Define meanings for each value
    $meanings = [
        "1" => "ตรวจแล้ว",
        "2" => "ยังไม่ได้ตรวจ",
        "3" => "ทั้งหมด"
    ];
    $selectedMeaning = $meanings[$Mark];
} else {
    $Mark = '3';
    $selectedMeaning = "ทั้งหมด";
}
?>