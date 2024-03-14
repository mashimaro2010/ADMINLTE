<?php
class ReferQuery{
    private $connection;

    public function __construct() {
        // กำหนดการเชื่อมต่อฐานข้อมูล
        $this->connection = oci_connect("admin", "999", "172.16.190.9/msh", 'UTF8');
        if (!$this->connection) {
            $m = oci_error();
            throw new Exception('Cannot connect to database: ' . $m['message']);
        }
    }

    public function TOTAL_REFER_IPD($startDate, $endDate){       
        $sql="SELECT Count(*) as TOTAL_REFER_IPD from (
            SELECT HN, refertype, hos_in_card, ReferINDate,ReferINTime,ReferOutDate,ReferOutTime, pla_placecode, opd_no, OPDIPD, DEAD_FLAG
            FROM (
                SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                       refin.refertype,
                       refin.hos_in_card,
                       TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                       TO_CHAR(refin.refer_in_datetime, 'HH24:MI:SS') AS ReferINTime,
                        TO_CHAR(refin.refer_out_datetime,'dd-mm-yyyy') AS ReferOutDate,
                        TO_CHAR(refin.refer_out_datetime, 'HH24:MI:SS') AS ReferOutTime,
                       refin.pla_placecode,
                       refin.opd_no,
                       refin.OPDIPD,
                       p.DEAD_FLAG,
                       ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
                FROM PATIENTS_REFER_HX refin
                INNER JOIN patients p ON p.run_hn = refin.PAT_RUN_HN AND p.year_hn = refin.PAT_YEAR_HN
                WHERE p.DEAD_FLAG IS NULL
                  AND refin.OPDIPD = 'I'
                  AND refin.refer_in_datetime BETWEEN TO_DATE(:startDate, 'dd-mm-yyyy') AND TO_DATE(:endDate, 'dd-mm-yyyy') + 1
            )
            WHERE row_num = 1 )";
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
        return $TOTAL_REFER_IPD = isset($row['TOTAL_REFER_IPD']) ? $row['TOTAL_REFER_IPD'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }    

    public function TOTAL_REFER_OPDALL($startDate, $endDate){
        $sql="SELECT Count(*) as TOTAL_REFER_OPDALL from (
            SELECT HN, refertype, hos_in_card, ReferINDate,ReferINTime,ReferOutDate,ReferOutTime, pla_placecode, opd_no, OPDIPD, DEAD_FLAG
            FROM (
                SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                       refin.refertype,
                       refin.hos_in_card,
                       TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                       TO_CHAR(refin.refer_in_datetime, 'HH24:MI:SS') AS ReferINTime,
                        TO_CHAR(refin.refer_out_datetime,'dd-mm-yyyy') AS ReferOutDate,
                        TO_CHAR(refin.refer_out_datetime, 'HH24:MI:SS') AS ReferOutTime,
                       refin.pla_placecode,
                       refin.opd_no,
                       refin.OPDIPD,
                       p.DEAD_FLAG,
                       ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
                FROM PATIENTS_REFER_HX refin
                INNER JOIN patients p ON p.run_hn = refin.PAT_RUN_HN AND p.year_hn = refin.PAT_YEAR_HN
                WHERE p.DEAD_FLAG IS NULL
                  AND refin.OPDIPD = 'O'
                  AND refin.refer_in_datetime BETWEEN TO_DATE(:startDate, 'dd-mm-yyyy') AND TO_DATE(:endDate, 'dd-mm-yyyy') + 1
            )
            WHERE row_num = 1 )";
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
        return $TOTAL_REFER_OPDALL = isset($row['TOTAL_REFER_OPDALL']) ? $row['TOTAL_REFER_OPDALL'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function TOTAL_REFER_ALL($startDate, $endDate){       
        $sql="SELECT Count(*) as TOTAL_REFER_ALL from (
            SELECT HN, refertype, hos_in_card, ReferINDate,ReferINTime,ReferOutDate,ReferOutTime, pla_placecode, opd_no, OPDIPD, DEAD_FLAG
            FROM (
                SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                       refin.refertype,
                       refin.hos_in_card,
                       TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                       TO_CHAR(refin.refer_in_datetime, 'HH24:MI:SS') AS ReferINTime,
                        TO_CHAR(refin.refer_out_datetime,'dd-mm-yyyy') AS ReferOutDate,
                        TO_CHAR(refin.refer_out_datetime, 'HH24:MI:SS') AS ReferOutTime,
                       refin.pla_placecode,
                       refin.opd_no,
                       refin.OPDIPD,
                       p.DEAD_FLAG,
                       ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
                FROM PATIENTS_REFER_HX refin
                INNER JOIN patients p ON p.run_hn = refin.PAT_RUN_HN AND p.year_hn = refin.PAT_YEAR_HN
                WHERE p.DEAD_FLAG IS NULL
                  AND refin.OPDIPD in ( 'O','I')
                  AND refin.refer_in_datetime BETWEEN TO_DATE(:startDate, 'dd-mm-yyyy') AND TO_DATE(:endDate, 'dd-mm-yyyy') + 1
            )
            WHERE row_num = 1 )";
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
        return $TOTAL_REFER_ALL = isset($row['TOTAL_REFER_ALL']) ? $row['TOTAL_REFER_ALL'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function TOTAL_REFER_IPDALL($startDate, $endDate){       
        $sql="SELECT Count(*) as TOTAL_REFER_IPDALL from (
            SELECT HN, refertype, hos_in_card, ReferINDate,ReferINTime,ReferOutDate,ReferOutTime, pla_placecode, opd_no, OPDIPD, DEAD_FLAG
            FROM (
                SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                       refin.refertype,
                       refin.hos_in_card,
                       TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                       TO_CHAR(refin.refer_in_datetime, 'HH24:MI:SS') AS ReferINTime,
                        TO_CHAR(refin.refer_out_datetime,'dd-mm-yyyy') AS ReferOutDate,
                        TO_CHAR(refin.refer_out_datetime, 'HH24:MI:SS') AS ReferOutTime,
                       refin.pla_placecode,
                       refin.opd_no,
                       refin.OPDIPD,
                       p.DEAD_FLAG,
                       ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
                FROM PATIENTS_REFER_HX refin
                INNER JOIN patients p ON p.run_hn = refin.PAT_RUN_HN AND p.year_hn = refin.PAT_YEAR_HN
                WHERE p.DEAD_FLAG IS NULL
                  AND refin.OPDIPD in ('I')
                  AND refin.refer_in_datetime BETWEEN TO_DATE(:startDate, 'dd-mm-yyyy') AND TO_DATE(:endDate, 'dd-mm-yyyy') + 1
            )
            WHERE row_num = 1 )";
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
        return $TOTAL_REFER_IPDALL = isset($row['TOTAL_REFER_IPDALL']) ? $row['TOTAL_REFER_IPDALL'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function TOTAL_REFER_DEAD($startDate, $endDate){       
        $sql="SELECT Count(*) as TOTAL_REFER_DEAD from (
            SELECT HN, refertype, hos_in_card, ReferINDate,ReferINTime,ReferOutDate,ReferOutTime, pla_placecode, opd_no, OPDIPD, DEAD_FLAG
            FROM (
                SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                       refin.refertype,
                       refin.hos_in_card,
                       TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                       TO_CHAR(refin.refer_in_datetime, 'HH24:MI:SS') AS ReferINTime,
                        TO_CHAR(refin.refer_out_datetime,'dd-mm-yyyy') AS ReferOutDate,
                        TO_CHAR(refin.refer_out_datetime, 'HH24:MI:SS') AS ReferOutTime,
                       refin.pla_placecode,
                       refin.opd_no,
                       refin.OPDIPD,
                       p.DEAD_FLAG,
                       ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
                FROM PATIENTS_REFER_HX refin
                INNER JOIN patients p ON p.run_hn = refin.PAT_RUN_HN AND p.year_hn = refin.PAT_YEAR_HN
                WHERE p.DEAD_FLAG='Y'
                  AND OPDIPD IN ('I','O')
                  AND refin.refer_in_datetime BETWEEN TO_DATE(:startDate, 'dd-mm-yyyy') AND TO_DATE(:endDate, 'dd-mm-yyyy') + 1
            )
            WHERE row_num = 1 )";
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
        return $TOTAL_REFER_DEAD = isset($row['TOTAL_REFER_DEAD']) ? $row['TOTAL_REFER_DEAD'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }
}
?>