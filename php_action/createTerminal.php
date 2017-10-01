<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
$terminalId = $_POST['terminalId'];
$terminalName = $_POST['terminalName'];
$branchCode = $_POST['branchCode'];
$onsite_offsite = $_POST['onsite_offsite'];
$vendor = $_POST['vendor'];
$localIp = $_POST['localIp'];
$custodianName = $_POST['custodianName'];


$sql = "INSERT INTO atm_database (terminal_id, terminal_name, branch_code, onsite_offsite, vendor_FK, local_ip, custodian_name) 
		VALUES ('$terminalId', '$terminalName', '$branchCode', '$onsite_offsite', '$vendor', '$localIp', '$custodianName')";

if($connect->query($sql) === TRUE) {

	$valid['success'] = true;
	$valid['messages'] = 'Successfully Added';
} else {
	$valid['success'] = false;
	$valid['messages'] = "Error While adding the Terminal";
} 

$connect->close();

echo json_encode($valid);

}// /if $_POST
?> 