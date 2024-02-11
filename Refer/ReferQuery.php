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
        $sql="SELECT Count(ALL i.AN) as TOTAL_REFER_IPD
        FROM PATIENTS_REFER_HX refin,IPDTRANS i,PATIENTS p,CREDIT_TYPES ct,NATIVE_CODE n,PLACES pl,DEPARTS dep
        where i.an=refin.an and i.hn=p.hn and refin.CREDIT_ID=ct.CREDIT_ID(+) and  p.native_id=n.native_id(+)  and i.PLA_PLACECODE=pl.PLACECODE and
        dep.depend_on_id=pl.dep_depend_on_id and
        refin.OPDIPD='I' and i.DATEDISCH  BETWEEN to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY')";
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

    public function TOTAL_REFER_OPD($startDate, $endDate){

        $sql="SELECT COUNT(*) AS TOTAL_REFER_OPD
        FROM (
            SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                   refin.refertype,
                   refin.hos_in_card,
                   TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                   refin.refer_out_datetime,
                   refin.pla_placecode,
                   refin.opd_no,
                   refin.OPDIPD,
                   p.DEAD_FLAG,
                   ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
            FROM PATIENTS_REFER_HX refin, patients p
            WHERE p.run_hn=refin.PAT_RUN_HN
              AND p.year_hn=refin.PAT_YEAR_HN
              AND p.DEAD_FLAG is NULL
              AND OPDIPD IN ('O')
              AND refin.opd_no IS NOT NULL
              AND TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') BETWEEN :startDate and :endDate)
        WHERE row_num = 1";
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
        return $TOTAL_REFER_OPD = isset($row['TOTAL_REFER_OPD']) ? $row['TOTAL_REFER_OPD'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function TOTAL_REFER_ALL($startDate, $endDate){       
        $sql="SELECT COUNT(*) AS TOTAL_REFER_ALL
        FROM (
            SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                   refin.refertype,
                   refin.hos_in_card,
                   TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                   refin.refer_out_datetime,
                   refin.pla_placecode,
                   refin.opd_no,
                   refin.OPDIPD,
                   p.DEAD_FLAG,
                   ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
            FROM PATIENTS_REFER_HX refin, patients p
            WHERE p.run_hn=refin.PAT_RUN_HN
              AND p.year_hn=refin.PAT_YEAR_HN
              AND p.DEAD_FLAG is NULL
              AND OPDIPD IN ('I','O')
              AND refin.opd_no IS NOT NULL
              AND TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') BETWEEN :startDate and :endDate)
        WHERE row_num = 1";
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

    public function TOTAL_REFER_DEAD($startDate, $endDate){       
        $sql="SELECT COUNT(*) AS TOTAL_REFER_DEAD
        FROM (
            SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,
                   refin.refertype,
                   refin.hos_in_card,
                   TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
                   refin.refer_out_datetime,
                   refin.pla_placecode,
                   refin.opd_no,
                   refin.OPDIPD,
                   p.DEAD_FLAG,
                   ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
            FROM PATIENTS_REFER_HX refin, patients p
            WHERE p.run_hn=refin.PAT_RUN_HN
              AND p.year_hn=refin.PAT_YEAR_HN
              AND p.DEAD_FLAG='Y'
              AND OPDIPD IN ('I','O')
              AND refin.opd_no IS NOT NULL
              AND TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') BETWEEN :startDate and :endDate)
        WHERE row_num = 1";
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

    public function TOTAL_OPDVISIT($startDate, $endDate){       
        $sql="SELECT Sum(Count(DISTINCT OPD_NO)) as TOTAL_OPDVISIT
        from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
        TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
        TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
        TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
        (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
        and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
        (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
        from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
        from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
        WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
        and OFH.OPD_NO=O.OPD_NO
        and TO_CHAR(o.OPD_DATE,'dd-mm-yyyy') between :startDate and :endDate /* get Present Day */ /* get Present Day */
        and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
        Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
        O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
        O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
        Order By HN,OPD_NO asc)  Temp  Group by HN,PSNAME,CREDIT_ID,
        OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
        RECEIVED_DRUG_TIME Order by HN,OPD_NO";
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
        return $TOTAL_OPDVISIT = isset($row['TOTAL_OPDVISIT']) ? $row['TOTAL_OPDVISIT'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }
    // Query จำนวน DoneScreen
    public function TOTAL_OPDSCREEN($startDate, $endDate){       
        $sql="SELECT Sum(Count(DISTINCT OPD_NO)) as TOTAL_OPDSCREEN
        from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
        TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
        TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
        TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
        (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
        and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
        (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
        from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
        from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
        WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
        and OFH.OPD_NO=O.OPD_NO
        and TO_CHAR(o.OPD_DATE,'dd-mm-yyyy') between :startDate and :endDate /* get Present Day */
        and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
        Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
        O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
        O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
        Order By HN,OPD_NO asc)  Temp  where SCREEN_OPD_TIME <> ' ' Group by HN,PSNAME,CREDIT_ID,
        OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
        RECEIVED_DRUG_TIME Order by HN,OPD_NO";
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
        return $TOTAL_OPDSCREEN = isset($row['TOTAL_OPDSCREEN']) ? $row['TOTAL_OPDSCREEN'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }
    //Query จำนวน DoneDoctor
    public function DONEDOCTOR($startDate, $endDate){       
        $sql="SELECT Sum(Count(DISTINCT OPD_NO)) as DONEDOCTOR
        from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
        TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
        TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
        TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
        (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
        and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
        (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
        from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
        from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
        WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
        and OFH.OPD_NO=O.OPD_NO
        and TO_CHAR(o.OPD_DATE,'dd-mm-yyyy') between :startDate and :endDate /* get Present Day */ /* get Present Day */
        and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
        Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
        O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
        O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
        Order By HN,OPD_NO asc)  Temp  where Doctor_Entry<>' ' Group by HN,PSNAME,CREDIT_ID,
        OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
        RECEIVED_DRUG_TIME Order by HN,OPD_NO";
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
        return $DONEDOCTOR = isset($row['DONEDOCTOR']) ? $row['DONEDOCTOR'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }
    //Query จำนวน Received Drug
    public function TOTAL_OPDMEDICINE($startDate, $endDate){       
        $sql="SELECT Sum(Count(DISTINCT OPD_NO)) as TOTAL_OPDMEDICINE
        from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
        TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
        TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
        TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
        (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
        and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
        (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
        from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
        from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
        WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
        TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
        and OFH.OPD_NO=O.OPD_NO
        and TO_CHAR(o.OPD_DATE,'dd-mm-yyyy') between :startDate and :endDate /* get Present Day */
        and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
        Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
        O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
        O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
        Order By HN,OPD_NO asc)  Temp  where RECEIVED_DRUG_TIME<>' ' Group by HN,PSNAME,CREDIT_ID,
        OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
        RECEIVED_DRUG_TIME Order by HN,OPD_NO";
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
        return $TOTAL_OPDMEDICINE = isset($row['TOTAL_OPDMEDICINE']) ? $row['TOTAL_OPDMEDICINE'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function Total_Waiting_Time($startDate, $endDate){       
        $sql="Select Sum(Count(DISTINCT ip.AN)) as TOTAL_IPDADMIT
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
        return $TOTAL_IPDADMIT = isset($row['TOTAL_IPDADMIT']) ? $row['TOTAL_IPDADMIT'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function Total_IPDAdmit($startDate, $endDate){       
        $sql="Select Sum(Count(DISTINCT ip.AN)) as TOTAL_IPDADMIT
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
        return $TOTAL_IPDADMIT = isset($row['TOTAL_IPDADMIT']) ? $row['TOTAL_IPDADMIT'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล
    }

    public function TOTAL_IPD_Disch($startDate, $endDate){
        $sql="select Count(ALL i.an) as TOTAL_IPD_DISCH
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
        return $TOTAL_IPD_DISCH = isset($row['TOTAL_IPD_DISCH']) ? $row['TOTAL_IPD_DISCH'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล        
    }
    
    public function TOTAL_IPD_Daed($startDate, $endDate){
        $sql="select Count(ALL i.an) as TOTAL_IPD_DAED
        from IPDTRANS i,patients p 
        where  i.hn = p.hn and  DEAD_FLAG='Y' and i.Dateadmit between to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY') and i.DT_TYPE_ID in ('9')
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
        return $TOTAL_IPD_DAED = isset($row['TOTAL_IPD_DAED']) ? $row['TOTAL_IPD_DAED'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล 
    }

    public function TOTAL_IPD_REFER($startDate, $endDate){
        $sql="select count(*) as TOTAL_IPD_REFER from (select p.HN,i.AN,TO_CHAR(i.DATEADMIT,'yyyy-dd-mm') as Date_Admit,TO_CHAR(i.DATEDISCH,'yyyy-dd-mm') as Date_Disc,p.PRENAME||''||p.NAME||' '||p.SURNAME as psname,i.PLA_PLACECODE,pl.FULLPLACE,
i.DS_STATUS_ID disc_id,ds.NAME as disc_name,i.DT_TYPE_ID disc_type,dt.NAME disc_type_name
from IPDTRANS i,PATIENTS p,PLACES pl,DISCHARGE_STATUSES ds,DISCHARGE_TYPES dt
where i.HN=p.HN and i.PLA_PLACECODE=pl.PLACECODE and i.DS_STATUS_ID=ds.STATUS_ID and i.DT_TYPE_ID=dt.TYPE_ID and
i.DATEDISCH between  to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY') and i.DT_TYPE_ID in ('4'))";
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
        return $TOTAL_IPD_REFER = isset($row['TOTAL_IPD_REFER']) ? $row['TOTAL_IPD_REFER'] : 0; // กำหนดค่าเริ่มต้นเป็น 0 ถ้าไม่มีข้อมูล 
    }
}
?>