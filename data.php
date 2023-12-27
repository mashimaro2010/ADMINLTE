<?php
header('Content-Type:application/json');
include_once('function.php');
$objConnect = MSHOCI();
$SQLERPatientCount="select
case pl.PLACECODE
 when '001' then 'อายุรกรรมชั้น 2'
 when '003' then 'ผิวหนังชั้น2'
 when '004' then 'วัณโรค'
 when '007' then 'โรคทั่วไป'
 when '008' then 'ฟอกไต'
 when '011' then 'ศัลยกรรม'
 when '018' then 'นรีเวช'
 when '019' then 'วัยทอง'
 when '020' then 'กุมารเวชกรรม'
 when '024' then 'หู คอ จมูก'
 when '026' then 'ตา'
 when '028' then 'ศัลยกรรมกระดูก'
 when '030' then 'จิตเวช'
 when '043' then 'ห้องฉีดยา'
 when '045' then 'ฝากครรภ์'
 when '051' then 'วางแผนครอบครัว'
 when '073' then 'ตรวจพิเศษ'
 when '133' then 'Admit Center'
 when '147' then 'โรคถุงลมโปร่งพองเรื้อรัง (COPD)'
 when '155' then 'คลินิกหัวใจชั้น2'
 when '160' then 'PM&R (ฟื้นฟู)'
 when '171' then 'กิจกรรมบำบัด'
 when '206' then 'CAPD Clinic'
 when '268' then 'Palliative_Care'
 when '405' then 'PLASTIC'
 when '408' then 'PREANESTHESIA'
 when '421' then 'ศัลยกรรมเด็ก'
 when '423' then 'คลินิกโรคต่อมไร้ท่อ'
 when '440' then 'ห้องนัดผ่าตัดใหญ่'
 end Title,count(o.OPD_NO) Score
from OPDS o,PATIENTS p,OPD_WAREHOUSE ow,CREDIT_TYPES ct,COME_TO_HOSPITAL_CODE ctm,PLACES pl,DOC_DBFS doc
where o.OPD_NO=ow.OPD_NO  and ow.credit_id=ct.credit_id and o.PAT_RUN_HN=p.RUN_HN and o.mark_yn='Y' and o.COME_TO_HOSPITAL_CODE='01' and
o.PAT_YEAR_HN=p.YEAR_HN and o.COME_TO_HOSPITAL_CODE=ctm.CODE and doc.DOC_CODE=o.DD_DOC_CODE and o.PLA_PLACECODE=pl.PLACECODE and
pl.PT_PLACE_TYPE_CODE='1' and pl.Del_Flag is NULL  and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd') =TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')  
group by pl.PLACECODE
Order by score Desc";
    $Result = oci_parse($objConnect, $SQLERPatientCount);
	oci_execute($Result);
    $data = array();
    while (($row = oci_fetch_assoc($Result)) != false) {
        $data[] = $row;
    }
    oci_close($objConnect);
    echo json_encode($data);
?>