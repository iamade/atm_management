<?php

require_once 'core.php';

$sql= "SELECT fault_id, terminal_id, terminal_name, atm_brand, vendor, nature_of_fault, custodian_name, custodian_number
resolution_path, date_logged, date_resolved, status, logged_by, markedresolvedby, reopenedby, changesmadeby FROM fault_log ORDER by 
fault_id DESC";

$result = $connect->query($sql);

$output = array('data' => array()); 

if($result->num_rows > 0) {
	
	while($row = $result->fetch_array()){
		$faultId = $row[0];
		//active


 

$output['data'][] = array(
	$faultId,
	$row[1],
	$row[2],
	$row[3],
	$row[4],
	$row[5],
	$row[6],
	$row[7],
	$row[8],
	$row[9],
	$row[10],
	$row[11],
	$row[12],
	$row[13],
	$row[14]
	

	);
}//while
}// if num_row

$connect->close();

echo json_encode($output);
