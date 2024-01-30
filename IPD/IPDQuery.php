<?php
class IPDQuery{
    private $connection;

    public function __construct() {
        // กำหนดการเชื่อมต่อฐานข้อมูล
        $this->connection = oci_connect("admin", "999", "172.16.190.9/msh", 'UTF8');
        if (!$this->connection) {
            $m = oci_error();
            throw new Exception('Cannot connect to database: ' . $m['message']);
        }
    }

    public function Total_IPDAdmit($startDate, $endDate){
        $sql="Select Sum(Count(DISTINCT ip.AN)) as Total_IPDAdmit
        from ipdtrans ip,places PL where ip.PLA_PLACECODE=pl.PLACECODE 
        and ip.Dateadmit between to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY')
        and PT_PLACE_TYPE_CODE='2' GROUP BY an,bed_no,ip.PLA_PLACECODE,pl.fullplace,FLNAME,DEGREE_OF_PATIENT_CODE,ip.Dateadmit,ip.Timeadmit,ip.Date_Created";
        $statement = oci_parse($this->connection, $sql);
    
        // ผูกตัวแปร
        oci_bind_by_name($statement, ":startDate", $startDate);
        oci_bind_by_name($statement, ":endDate", $endDate);
    
        // รัน query และตรวจสอบข้อผิดพลาด
        if (!oci_execute($statement)) {
            $error = oci_error($statement);
            throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        return isset($row['TOTAL_IPDADMIT']) ? $row['TOTAL_IPDADMIT'] : 0; // ตรวจสอบว่ามีคีย์ RecordCount ก่อนส่งค่ากลับ
    }

    public function TOTAL_IPD_Disch($startDate, $endDate){
        $sql="select Count(ALL i.an) as TOTAL_IPD_Disch
        from IPDTRANS i,patients p
        where  i.hn = p.hn and  DEAD_FLAG='Y' and i.DATEDISCH between to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY')
        Order by Dateadmit asc";
        $statement = oci_parse($this->connection, $sql);
    
        // ผูกตัวแปร
        oci_bind_by_name($statement, ":startDate", $startDate);
        oci_bind_by_name($statement, ":endDate", $endDate);
    
        // รัน query และตรวจสอบข้อผิดพลาด
        if (!oci_execute($statement)) {
            $error = oci_error($statement);
            throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        return isset($row['TOTAL_IPD_DISCH']) ? $row['TOTAL_IPD_DISCH'] : 0; // ตรวจสอบว่ามีคีย์ RecordCount ก่อนส่งค่ากลับ
    }
    
    public function TOTAL_IPD_Daed($startDate, $endDate){
        $sql="select Count(ALL i.an) as TOTAL_IPD_Disch
        from IPDTRANS i,patients p
        where  i.hn = p.hn and  DEAD_FLAG='Y' and i.DATEDISCH between to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY')
        Order by Dateadmit asc";
        $statement = oci_parse($this->connection, $sql);
    
        // ผูกตัวแปร
        oci_bind_by_name($statement, ":startDate", $startDate);
        oci_bind_by_name($statement, ":endDate", $endDate);
    
        // รัน query และตรวจสอบข้อผิดพลาด
        if (!oci_execute($statement)) {
            $error = oci_error($statement);
            throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        return isset($row['TOTAL_IPD_DAED']) ? $row['TOTAL_IPD_DAED'] : 0; // ตรวจสอบว่ามีคีย์ RecordCount ก่อนส่งค่ากลับ
    }
}
?>