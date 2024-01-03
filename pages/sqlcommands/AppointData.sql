select o.opd_visit_type,o.OPD_NO,p.hn,TO_CHAR(o.OPD_DATE,'yyyy-mm-dd') as VisitDate,TO_CHAR(o.Reach_OPD_DATETIME, 'YYYY-MM-DD HH24:MI:SS') as TimeArrive,
p.prename||''||p.name||' '||p.surname as psname,DECODE(p.SEX, 'M','Man','Women') as sex,
trunc(months_between(o.OPD_DATE,p.BIRTHDAY)/12) age_year,
ct.name as credit_name,ctm.name as cometohos,o.mark_yn,pl.fullplace,doc.prename||''||doc.name||' '||doc.surname as doctor_name,
o.wt_kg,o.Height_cm,o.bmi,o.bp_systolic,o.bp_diastolic,o.palse,
DBMS_LOB.SUBSTR(o.symptom_clob) as Symptom,o.past_illness
,(select n.name from native_code n where n.native_id=p.native_id and rownum<=1) as nat_name
from OPDS o,PATIENTS p,OPD_WAREHOUSE ow,CREDIT_TYPES ct,COME_TO_HOSPITAL_CODE ctm,PLACES pl,DOC_DBFS doc
where o.OPD_NO=ow.OPD_NO  and ow.credit_id=ct.credit_id and o.PAT_RUN_HN=p.RUN_HN and o.opd_visit_type='D'
and o.PAT_YEAR_HN=p.YEAR_HN and o.COME_TO_HOSPITAL_CODE=ctm.CODE and doc.DOC_CODE=o.DD_DOC_CODE and o.PLA_PLACECODE=pl.PLACECODE and
pl.PT_PLACE_TYPE_CODE='1' and pl.Del_Flag is NULL  and
TO_CHAR(o.OPD_DATE,'yyyy-mm-dd') between TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd') and TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd') Order by pl.PLACECODE Desc