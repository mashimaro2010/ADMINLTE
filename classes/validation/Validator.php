<?php

class DateValidator {

  public function __construct() {
  }

  /**
   * ตรวจสอบว่ารูปแบบวันที่ถูกต้องหรือไม่
   *
   * @param string $date
   * @return bool
   */
  public function isValidDate($date) {
    // ตรวจสอบรูปแบบ dd-mm-yyyy
    if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $date)) {
      return true;
    }
  
    // ตรวจสอบรูปแบบ yyyy-mm-dd
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
      return true;
    }
  
    return false;
  }

  /**
   * แปลงรูปแบบวันที่จาก yyyy-mm-dd เป็น dd-mm-yyyy
   *
   * @param string $date
   * @return string
   */
  public function convertDate($date) {
    if (!$this->isValidDate($date)) {
      return null;
    }

    // แยกส่วนประกอบของวันที่
    $parts = explode('-', $date);

    // ประกอบวันที่ใหม่
    $newDate = $parts[2] . '-' . $parts[1] . '-' . $parts[0];

    return $newDate;
  }
}
?>
