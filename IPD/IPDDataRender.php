<?php
class IPDDataRender{
    private $connection;

    public function __construct() {
        // กำหนดการเชื่อมต่อฐานข้อมูล
        $this->connection = oci_connect("admin", "999", "172.16.190.9/msh", 'UTF8');
        if (!$this->connection) {
            $m = oci_error();
            throw new Exception('Cannot connect to database: ' . $m['message']);
        }
    }

    public function Bind_IPDDataAdmit($startDate, $endDate){       
        $sql="Select ip.AN,ip.BED_NO,ip.PLA_PLACECODE,pl.fullplace,ip.FLNAME,ip.DEGREE_OF_PATIENT_CODE,/*TO_CHAR(ip.Dateadmit, 'dd-MON-yyyy', 'NLS_DATE_LANGUAGE=''ENGLISH''') Admit_ENG_Date,*/
        TO_CHAR(ip.Dateadmit,'yyyy-mm-dd')||' '||TO_CHAR(ip.Timeadmit,'HH24:MI:SS') as AdmitDateTime
        from ipdtrans ip,places PL where ip.PLA_PLACECODE=pl.PLACECODE and ip.Dateadmit between to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY')
        and PT_PLACE_TYPE_CODE='2' GROUP BY an,bed_no,ip.PLA_PLACECODE,pl.fullplace,FLNAME,DEGREE_OF_PATIENT_CODE,ip.Dateadmit,ip.Timeadmit,ip.Date_Created
        Order by PLA_PLACECODE,AdmitDateTime DESC";
        $statement = oci_parse($this->connection, $sql);
        // ผูกตัวแปร
        oci_bind_by_name($statement, ":startDate", $startDate);
        oci_bind_by_name($statement, ":endDate", $endDate);
    
        // รัน query และตรวจสอบข้อผิดพลาด
        if (!oci_execute($statement)) {
            $error = oci_error($statement);
            throw new Exception("Query execution failed: " . $error['message']);
        }

        // ทำการประมวลผลผลลัพธ์จาก query และคืนค่าออกไป
        // ตัวอย่างเช่น:
        $result = array();
        while ($row = oci_fetch_assoc($statement)) {
            // ดำเนินการประมวลผลข้อมูลตามที่ต้องการ
            // เพิ่มข้อมูลลงใน $result
            $result[] = $row;
        }
        return $result;
    }    
}
?>