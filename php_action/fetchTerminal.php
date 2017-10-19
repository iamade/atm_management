<?php

require_once 'core.php';

$sql = "SELECT atm_id, terminal_id, terminal_name, branch_code, 
onsite_offsite, vendor_FK, local_ip, custodian_name, default_gateway, 
region FROM atm_database ORDER BY atm_id DESC ";

$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		 //  echo "<pre>";
		 //   print_r($row);
		 // echo "</pre>";
		$atmId = $row[0];
		



	$output['data'][] = array( 
			$atmId,
			$row[1],
			$row[2],
			$row[3],
			$row[4],
			$row[5],
			$row[6],
			$row[7],
			$row[8],
			$row[9]  
			
			);


		
	} // while
	
} // /if


echo json_encode($output);


$connect->close();


 

?>