<?php
class ReferDataRender{
    private $connection;

    public function __construct() {
        // กำหนดการเชื่อมต่อฐานข้อมูล
        $this->connection = oci_connect("admin", "999", "172.16.190.9/msh", 'UTF8');
        if (!$this->connection) {
            $m = oci_error();
            throw new Exception('Cannot connect to database: ' . $m['message']);
        }
    }

    public function Bind_IPDRefer($startDate, $endDate){       
        $sql="SELECT 'OUT' as Ref,decode(refin.OPDIPD,'O','OPD','IPD') as Depart,TO_CHAR(decode(refin.REFERTYPE,'1',refin.REFER_NO,'')) as in_Number,cast(refin.PAT_RUN_HN||'/'||refin.PAT_YEAR_HN as char(20)) as HN,i.an,
        TO_CHAR(refin.REFER_IN_DATETIME,'yyyy-mm-dd') as Refer_Date,TO_CHAR(i.DATEADMIT,'yyyy-mm-dd') as Date_Admit,TO_CHAR(i.DATEDISCH,'yyyy-mm-dd') as Date_Disc,
        p.PRENAME||''||p.NAME||' '||p.SURNAME as psname,TO_CHAR(decode(refin.REFERTYPE,'2',refin.REFER_NO,'')) as out_Number,
        (select h.OFF_ID from HOSPITAL h where h.OFF_ID=refin.HOS_IN_CARD and rownum<=1) as Hosp_Code,
        (select h.OFF_NAME2||' '||h.OFF_NAME1 from HOSPITAL h where h.OFF_ID=refin.HOS_IN_CARD and rownum<=1) as Hosp_Name,
        i.REFER_REASON,i.DC_REMARK,i.DISCHARGE_REMARK,TO_Char(p.BIRTHDAY,'yyyy-mm-dd') as BIRTHDATE,trunc(months_between(i.DATEADMIT,p.BIRTHDAY)/12) age,
        DECODE(p.SEX, 'M','ชาย','หญิง') as sex,n.name as nat_name,
        p.HOME_BOOK_HOME as addrpart,p.VILLAGE as moopart,
        (select a.NAME from ADDRESS a where a.code=p.TAMBON) as tumbon,
        (select a.NAME from ADDRESS a where a.code=p.DIS_DIST_CODE||0||0 and a.TYPE='2') as ampher,
        (select a.NAME from ADDRESS a where a.code=p.PRO1_PROV_CODE||0||0||0||0 and a.TYPE='1') as PROVINCE,
        refin.CREDIT_ID,ct.name as credit_name,pl.fullplace,dep.fullname as dep,
        (select idag.ICD_CODE from IPDDIAGS idag where idag.IPD_RUN_AN=i.RUN_AN and idag.IPD_YEAR_AN=i.YEAR_AN and idag.TYPE='1' and rownum<=1) as pdx,
        (select d.PRENAME||''||d.NAME||' '||d.SURNAME from DOC_DBFS d where d.DOC_CODE=refin.DD_DOC_CODE and rownum<=1) as refer_doc_name,
        (select d.PRENAME||''||d.NAME||' '||d.SURNAME from IPDDIAGS idag,DOC_DBFS d where idag.IPD_RUN_AN=i.RUN_AN and idag.IPD_YEAR_AN=i.YEAR_AN and idag.DOC1=d.doc_code and idag.TYPE='1') as RX_doc_name
        FROM PATIENTS_REFER_HX refin,IPDTRANS i,PATIENTS p,CREDIT_TYPES ct,NATIVE_CODE n,PLACES pl,DEPARTS dep
        where i.an=refin.an and i.hn=p.hn and refin.CREDIT_ID=ct.CREDIT_ID(+) and  p.native_id=n.native_id(+)  and i.PLA_PLACECODE=pl.PLACECODE and
        dep.depend_on_id=pl.dep_depend_on_id and
        refin.OPDIPD='I' and i.DATEDISCH  BETWEEN to_date(:startDate,'DD-MM-YYYY') and to_date(:endDate,'DD-MM-YYYY')
        Order By Refer_Date Desc";
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

    public function Bind_OPDRefer($startDate, $endDate){       
        $sql="SELECT HN,opd_no,psname,BIRTHDATE,Age,sex,refertype,IN_Number,OUT_Number,HOS_IN,Hospital,nat_name,CREDIT_ID,credit_name,
        ReferINDate,ReferINTime,ReferOutDate,ReferOutTime,pla_placecode,fullplace,dep,OPDIPD, DEAD_FLAG
        FROM (SELECT CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) AS HN,refin.OPDIPD,
        p.PRENAME||''||p.NAME||' '||p.SURNAME as psname,
        TO_Char(p.BIRTHDAY,'dd-mm-yyyy') as BIRTHDATE,trunc(months_between(o.OPD_DATE,p.BIRTHDAY)/12)  as Age,
        DECODE(p.SEX, 'M','ชาย','หญิง') as sex,refin.refertype,TO_CHAR(decode(refin.REFERTYPE,'1',refin.REFER_NO,'')) as IN_Number,
        TO_CHAR(decode(refin.REFERTYPE,'2',refin.REFER_NO,'')) as OUT_Number,refin.hos_in_card as HOS_IN,
        (select CONCAT(h.OFF_NAME2,h.OFF_NAME1) from HOSPITAL h where h.OFF_ID=refin.HOS_IN_CARD and rownum<=1) as Hospital,
        n.name as nat_name,refin.CREDIT_ID,ct.name as credit_name,
        TO_CHAR(refin.refer_in_datetime,'dd-mm-yyyy') AS ReferINDate,
        TO_CHAR(refin.refer_in_datetime, 'HH24:MI:SS') AS ReferINTime,
        TO_CHAR(refin.refer_out_datetime,'dd-mm-yyyy') AS ReferOutDate,
        TO_CHAR(refin.refer_out_datetime, 'HH24:MI:SS') AS ReferOutTime,
        refin.pla_placecode,pl.fullplace,dep.fullname as dep,refin.opd_no,p.DEAD_FLAG,
        ROW_NUMBER() OVER (PARTITION BY CONCAT(refin.PAT_RUN_HN, '/' || refin.PAT_YEAR_HN) ORDER BY refin.refer_in_datetime) AS row_num
        FROM PATIENTS_REFER_HX refin,OPDS o,PATIENTS p,NATIVE_CODE n,CREDIT_TYPES ct,PLACES pl,DEPARTS dep
        WHERE p.run_hn = refin.PAT_RUN_HN AND p.year_hn = refin.PAT_YEAR_HN and o.opd_no=refin.opd_no and p.DEAD_FLAG IS NULL
        AND dep.depend_on_id=pl.dep_depend_on_id   AND  p.native_id=n.native_id(+) and refin.CREDIT_ID=ct.CREDIT_ID(+) and o.PLA_PLACECODE=pl.PLACECODE
        AND refin.OPDIPD = 'O' AND refin.refer_in_datetime BETWEEN TO_DATE(:startDate, 'dd-mm-yyyy') AND TO_DATE(:endDate, 'dd-mm-yyyy') + 1
        )WHERE row_num = 1";
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