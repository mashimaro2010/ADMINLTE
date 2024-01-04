<?php
// HospitalDataFetcher.php
class HospitalDataFetcher {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    private function executeQuery($query) {
        $result = [];
        $stid = oci_parse($this->dbConnection, $query);
        oci_execute($stid);

        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            $result[] = $row;
        }

        return $result;
    }

    public function getTotalUniqueOPD_NO() {
        $query = "SELECT
        COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO
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
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') = TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')";
        return $this->executeQuery($query);
    }

    public function getTotalUniqueOPD_NO_Check() {
        $query = "SELECT
        COUNT(DISTINCT o.OPD_NO) AS TotalUniqueOPD_NO_Check
        FROM
        OPDS o
        JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
        JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
        JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
        JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
        JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
        JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
        WHERE o.opd_visit_type='D'
        AND o.mark_yn='Y'
        AND o.COME_TO_HOSPITAL_CODE = '01'
        AND pl.PT_PLACE_TYPE_CODE = '1'
        AND pl.Del_Flag IS NULL
        AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') = TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')";
        return $this->executeQuery($query);
    }

    public function getTotalDifference() {
        $query = "SELECT
        (SELECT COUNT(DISTINCT o.OPD_NO)
         FROM OPDS o
         JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
         JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
         JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
         JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
         JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
         JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
         WHERE o.opd_visit_type='D'
         AND o.COME_TO_HOSPITAL_CODE = '01'
         AND pl.PT_PLACE_TYPE_CODE = '1'
         AND pl.Del_Flag IS NULL
         AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') = TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) -
        (SELECT COUNT(DISTINCT o.OPD_NO)
         FROM OPDS o
         JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
         JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
         JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
         JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
         JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
         JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
         WHERE o.opd_visit_type='D'
         AND o.mark_yn='Y'
         AND o.COME_TO_HOSPITAL_CODE = '01'
         AND pl.PT_PLACE_TYPE_CODE = '1'
         AND pl.Del_Flag IS NULL
         AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') = TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) AS Difference
    FROM DUAL";
        return $this->executeQuery($query);
    }
}
?>
