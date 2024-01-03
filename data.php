<?php
header('Content-Type:application/json');
include_once('function.php');
$objConnect = MSHOCI();
$SQLERPatientCount="SELECT
CASE pl.PLACECODE
WHEN '001' THEN 'อายุรกรรมชั้น 2'
    WHEN '002' THEN 'Napha Clinic'
    WHEN '003' THEN 'ผิวหนังชั้น 2'
    WHEN '004' THEN 'วัณโรค'
    WHEN '005' THEN 'เบาหวาน'
    WHEN '007' THEN 'โรคทั่วไป'
    WHEN '008' THEN 'ฟอกไต'
    WHEN '011' THEN 'ศัลยกรรม'
    WHEN '012' THEN 'ศัลยกรรมประสาท'
    WHEN '018' THEN 'นรีเวช'
    WHEN '019' THEN 'วัยทอง'
    WHEN '020' THEN 'กุมารเวชกรรม'
    WHEN '024' THEN 'หู คอม จมูก'
    WHEN '026' THEN 'ตา'
    WHEN '028' THEN 'ศัลยกรรมกระดูก'
    WHEN '030' THEN 'จิตเวช'
    WHEN '043' THEN 'ห้องฉีดยา'
    WHEN '045' THEN 'ฝากครรถ์'
    WHEN '051' THEN 'วางแผนครอบครัว'
    WHEN '073' THEN 'ตรวจพิเศษ'
    WHEN '087' THEN 'เวชปฏิบัติ'
    WHEN '133' THEN 'Admit Center'
    WHEN '147' THEN 'โรคถุงลมโปร่งพองเรื้อรัง (COPD)'
    WHEN '155' THEN 'คลินิกหัวใจชั้น2'
    WHEN '160' THEN 'PM&R (ฟื้นฟู)'
    WHEN '162' THEN 'Clinic CKD'
    WHEN '171' THEN 'กิจกรรมบำบัด'
    WHEN '206' THEN 'CAPD Clinic'
    WHEN '268' THEN 'Palliative_Care'
    WHEN '405' THEN 'PLASTIC'
    WHEN '408' THEN 'PREANESTHESIA'
    WHEN '421' THEN 'ศัลยกรรมเด็ก'
    WHEN '422' THEN 'อายุรกรรมระบบประสาท'
    WHEN '423' THEN 'คลินิกโรคต่อมไร้ท่อ'
    WHEN '426' THEN 'ONCO'
    WHEN '440' THEN 'ห้องนัดผ่าตัดใหญ่'
    ELSE NULL
END Title,
COUNT(o.OPD_NO) Score
FROM
OPDS o,
PATIENTS p,
OPD_WAREHOUSE ow,
CREDIT_TYPES ct,
COME_TO_HOSPITAL_CODE ctm,
PLACES pl,
DOC_DBFS doc
WHERE
o.OPD_NO = ow.OPD_NO
AND ow.credit_id = ct.credit_id
AND o.PAT_RUN_HN = p.RUN_HN
AND o.mark_yn = 'Y'
AND o.COME_TO_HOSPITAL_CODE = '01'
AND o.PAT_YEAR_HN = p.YEAR_HN
AND o.COME_TO_HOSPITAL_CODE = ctm.CODE
AND doc.DOC_CODE = o.DD_DOC_CODE
AND o.PLA_PLACECODE = pl.PLACECODE
AND pl.PT_PLACE_TYPE_CODE = '1'
AND pl.Del_Flag IS NULL
AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') = TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')
GROUP BY
pl.PLACECODE
HAVING
COUNT(o.OPD_NO) > 0
ORDER BY
Score DESC
";
    $Result = oci_parse($objConnect, $SQLERPatientCount);
	oci_execute($Result);
    $data = array();
    while (($row = oci_fetch_assoc($Result)) != false) {
        $data[] = $row;
    }
    oci_close($objConnect);
    echo json_encode($data);
?>