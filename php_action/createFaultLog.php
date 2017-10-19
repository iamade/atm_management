<?php

require_once 'core.php';

$valid['success'] = array('succeess' => false, 'messages' => array());
if($_POST) {
	$terminalFK= $_POST['terminalFK'];
	$terminalId = $_POST['terminalId'];
	$terminalName = $_POST['terminalName'];
	$atmBrand = $_POST['atmBrand'];
	$natureOfFault = $_POST['natureOfFault'];
	$vendor = $_POST['vendor'];
	$custodianName = $_POST['custodianName'];
	$custodianNumber = $_POST['custodianNumber'];
	$resolutionPath = $_POST['resolutionPath'];
	$dateLogged = $_POST['dateLogged'];
	$dateResolved = $_POST['dateResolved'];
	$status = $_POST['status'];
	$loggedBy = $_POST['loggedBy'];
	$markedResolvedBy = $_POST['markedResolvedBy'];
	$reOpenedBy = $_POST['reOpenedBy'];
	$changesMadeBy = $_POST['changesMadeBy'];


	$sql = "INSERT INTO fault_log (terminal_FK, terminal_id, terminal_name, vendor, atm_brand, nature_of_fault, custodian_name, custodian_number, resolution_path,
		date_logged, date_resolved, status, logged_by, markedresolvedby, reopenedby, changesmadeby) 
VALUES ($terminalFK, $terminalId, $terminalName, $vendor, '$atmBrand', '$natureOfFault',  '$custodianName', '$custodianNumber', '$resolutionPath', '$dateLogged',
					'$dateResolved', '$status', '$loggedBy', '$markedResolvedBy', '$reOpenedBy', '$changesMadeBy')";

if($connect->query($sql) === TRUE) {
	$valid['success'] = true;
	$valid['messages'] = 'Successfully Added';

} else {
	$valid['success'] = false;
	$valid['messages'] = "Error while adding the fault";

}
// echo "<pre>";
//  print_r($sql);
//  echo "<pre";

$connect->close();
 
echo json_encode($valid);

}// /if $