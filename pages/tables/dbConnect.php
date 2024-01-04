<?php
// dbConnect.php
include('pages/tables/function.php');
$objConnect = MSHOCI();
if (!$objConnect) {
    echo "Failed to connect to Oracle";
    exit;
}
?>