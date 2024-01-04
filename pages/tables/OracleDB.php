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
        $sql = "SELECT PLACECODE, FULLPLACE FROM PLACES WHERE PT_PLACE_TYPE_CODE = '1' AND Del_Flag IS NULL";
        $statement = oci_parse($this->connection, $sql);
        oci_execute($statement);

        $result = [];
        while ($row = oci_fetch_assoc($statement)) {
            array_push($result, $row);
        }

        oci_free_statement($statement);
        return $result;
    }

    public function __destruct() {
        oci_close($this->connection);
    }
}
?>