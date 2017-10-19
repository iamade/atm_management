<?php require_once 'php_action/core.php';?>
<?php

$sql = "SELECT fault_id, terminal_FK, terminal_name, atm_brand, vendor, 
nature_of_fault, custodian_name, resolution_path, 
date_logged, date_resolved, status, logged_by,
markedresolvedby, reopenedby, changesmadeby FROM fault_log ORDER BY fault_id DESC";

$sql_2 = "SELECT * FROM atm_database ";
$sql_3 = "SELECT terminal_FK FROM fault_log";

$result = $connect->query($sql);
$result2 = $connect->query($sql_2);
$result3 = $connect->query($sql_3);

?>