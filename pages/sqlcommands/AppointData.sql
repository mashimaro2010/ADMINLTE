SELECT DISTINCT
    o.opd_visit_type,
    o.OPD_NO,
    p.hn,
    TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') AS VisitDate,
    TO_CHAR(o.Reach_OPD_DATETIME, 'YYYY-MM-DD HH24:MI:SS') AS TimeArrive,
    p.prename || '' || p.name || ' ' || p.surname AS psname,
    DECODE(p.SEX, 'M', 'Man', 'Women') AS sex,
    TRUNC(MONTHS_BETWEEN(o.OPD_DATE, p.BIRTHDAY)/12) AS age_year,
    ct.name AS credit_name,
    ctm.name AS cometohos,
    o.mark_yn,
    pl.fullplace,
    doc.prename || '' || doc.name || ' ' || doc.surname AS doctor_name,
    o.wt_kg,
    o.Height_cm,
    o.bmi,
    o.bp_systolic,
    o.bp_diastolic,
    o.palse,
    DBMS_LOB.SUBSTR(o.symptom_clob) AS Symptom,
    o.past_illness,
    (SELECT n.name FROM native_code n WHERE n.native_id = p.native_id AND ROWNUM <= 1) AS nat_name,
    pl.PLACECODE
FROM
    OPDS o
    JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
    JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
    JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
    JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
    JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
    JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
WHERE
    o.opd_visit_type = 'D'
    AND o.COME_TO_HOSPITAL_CODE = '01'
    AND pl.PT_PLACE_TYPE_CODE = '1'
    AND pl.Del_Flag IS NULL
    AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') BETWEEN TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd') AND TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')
ORDER BY
    pl.PLACECODE DESC