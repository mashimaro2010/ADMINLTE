<?php
class OracleDB {
    private $connection;

    public function __construct() {
        $this->connection = oci_connect("admin", "999", "172.16.190.9/msh", 'UTF8');
        if (!$this->connection) {
            $m = oci_error();
            throw new Exception('Cannot connect to database: ' . $m['message']);
        }
    }

    public function queryPlaces() {
        $sql = "SELECT PLACECODE, FULLPLACE FROM PLACES WHERE PT_PLACE_TYPE_CODE = '1' AND Del_Flag IS NULL order by FULLPLACE desc";
        $statement = oci_parse($this->connection, $sql);
        oci_execute($statement);

        $result = [];
        while ($row = oci_fetch_assoc($statement)) {
            array_push($result, $row);
        }

        oci_free_statement($statement);
        return $result;
    }

    public function querySelectPlacesName($DepartmentCode) {
        $sql = "SELECT FULLPLACE FROM PLACES WHERE PLACECODE='$DepartmentCode' and PT_PLACE_TYPE_CODE = '1' AND Del_Flag IS NULL order by FULLPLACE desc";
        $statement = oci_parse($this->connection, $sql);
        oci_execute($statement);
        while ($row = oci_fetch_assoc($statement)) {
            $result = $row['FULLPLACE'];
            return $result;
        }
    }

    public function __destruct() {
        oci_close($this->connection);
    }

    //คนไข้ที่นัดมาทั้งหมด ค่าเริ่มต้น
    public function getTotalUniqueOPD_NO_Default($startDate, $endDate) {
        $sql = "SELECT COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE
        o.opd_visit_type='D'
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN :startDate AND :endDate"; // ระบุเงื่อนไขอื่นๆ ตามต้องการ
        $statement = oci_parse($this->connection, $sql);
    
         // ตรวจสอบการผูกตัวแปร
         oci_bind_by_name($statement, ":startDate", $startDate);
         oci_bind_by_name($statement, ":endDate", $endDate);
        // ตรวจสอบการรัน query
        if (!oci_execute($statement)) {
        $error = oci_error($statement);
        throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        if ($row) {
        return $row['TOTALUNIQUEOPD_NO'];
        } else {
        echo "No data found";
        }
    }
    // ค่าเริ่มต้นคนไข้มาตามนัด
    public function getTotalOPD_Accept_Come_Default($startDate, $endDate) {
        $sql = "SELECT COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE
        o.opd_visit_type='D'
        AND o.mark_yn='Y'
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN :startDate AND :endDate"; // ระบุเงื่อนไขอื่นๆ ตามต้องการ
        $statement = oci_parse($this->connection, $sql);
    
         // ตรวจสอบการผูกตัวแปร
         oci_bind_by_name($statement, ":startDate", $startDate);
         oci_bind_by_name($statement, ":endDate", $endDate);
        // ตรวจสอบการรัน query
        if (!oci_execute($statement)) {
        $error = oci_error($statement);
        throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        if ($row) {
        return $row['TOTALUNIQUEOPD_NO'];
        } else {
        echo "No data found";
        }
    }

    // ค่าเริ่มต้นคนไข้มาตามนัด
    public function getTotalOPD_not_Come_Default($startDate, $endDate) {
        $sql = "SELECT COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE
        o.opd_visit_type='D'
        AND o.mark_yn is NULL
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN :startDate AND :endDate"; // ระบุเงื่อนไขอื่นๆ ตามต้องการ
        $statement = oci_parse($this->connection, $sql);
    
         // ตรวจสอบการผูกตัวแปร
         oci_bind_by_name($statement, ":startDate", $startDate);
         oci_bind_by_name($statement, ":endDate", $endDate);
        // ตรวจสอบการรัน query
        if (!oci_execute($statement)) {
        $error = oci_error($statement);
        throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        if ($row) {
        return $row['TOTALUNIQUEOPD_NO'];
        } else {
        echo "No data found";
        }
    }

    //คนไข้ที่นัดมา และมาตามนัด เลือกตามห้องตรวจ
    public function getTotalUniqueOPD_NO($startDate, $endDate,$Department) {
        $sql = "SELECT COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE
        o.opd_visit_type='D'
        AND pl.PLACECODE = :Department
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN :startDate AND :endDate"; // ระบุเงื่อนไขอื่นๆ ตามต้องการ
        $statement = oci_parse($this->connection, $sql);
    
         // ตรวจสอบการผูกตัวแปร
         oci_bind_by_name($statement, ":startDate", $startDate);
         oci_bind_by_name($statement, ":endDate", $endDate);
         oci_bind_by_name($statement, ":Department", $Department);

        // ตรวจสอบการรัน query
        if (!oci_execute($statement)) {
        $error = oci_error($statement);
        throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        if ($row) {
        return $row['TOTALUNIQUEOPD_NO'];
        } else {
        echo "No data found";
        }
    }

    //กดค้นหา คนไข้ที่นัดมามาตรวจตามนัด
    public function getTotalOPD_Accept_Come($startDate, $endDate,$Department) {
        $sql = "SELECT COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE
        o.opd_visit_type='D'
        AND o.mark_yn='Y'
        AND pl.PLACECODE = :Department
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN :startDate AND :endDate"; // ระบุเงื่อนไขอื่นๆ ตามต้องการ
        $statement = oci_parse($this->connection, $sql);
    
         // ตรวจสอบการผูกตัวแปร
         oci_bind_by_name($statement, ":startDate", $startDate);
         oci_bind_by_name($statement, ":endDate", $endDate);
         oci_bind_by_name($statement, ":Department", $Department);
        // ตรวจสอบการรัน query
        if (!oci_execute($statement)) {
        $error = oci_error($statement);
        throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        if ($row) {
        return $row['TOTALUNIQUEOPD_NO'];
        } else {
        echo "No data found";
        }
    }
    //กดค้นหา คนไข้นัดที่ไม่มาตรวจตามนัด
    public function getTotalOPD_Not_Come($startDate, $endDate,$Department) {

        $sql = "SELECT COUNT(DISTINCT o.OPD_NO) AS Difference
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE
        o.opd_visit_type='D'
        AND pl.PLACECODE = :Department
        AND o.mark_yn is NULL
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN :startDate AND :endDate";

        $statement = oci_parse($this->connection, $sql);
         // ตรวจสอบการผูกตัวแปร
         oci_bind_by_name($statement, ":startDate", $startDate);
         oci_bind_by_name($statement, ":endDate", $endDate);
         oci_bind_by_name($statement, ":Department", $Department);
        // ตรวจสอบการรัน query
        
        if (!oci_execute($statement)) {
            $error = oci_error($statement);
            throw new Exception("Query execution failed: " . $error['message']);
        }
        $row = oci_fetch_assoc($statement);
        if ($row) {
            if (isset($row['DIFFERENCE'])) {
                return $row['DIFFERENCE'];
            } else {
                echo "Column 'DIFFERENCE' does not exist in the result set.";
            }
        } else {
            echo "No data found";
        }
    }
}
?>