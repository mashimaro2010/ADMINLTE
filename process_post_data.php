<?php
if (isset($_POST['Mark'])) {
    $Mark = $_POST['Mark'];
    // Define meanings for each value
    $meanings = [
        "Y" => "ตรวจแล้ว",
        "is NULL" => "ยังไม่ได้ตรวจ",
        "3" => "ทั้งหมด"
    ];
    $selectedMeaning = $meanings[$Mark];
} else {
    $Mark = 'Y';
    $selectedMeaning = "ทั้งหมด";
}
?>