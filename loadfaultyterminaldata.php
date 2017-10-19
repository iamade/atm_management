
<?php
//load
 require_once 'php_action/fetchFaultLog.php';

$output = '';

if(isset($_POST["terminalId"]))
{
	if($_POST["terminalId"] != '')
{
	$sql = "SELECT * FROM atm_database WHERE terminal_id = '".$_POST["terminalId"]."'";

}
else 
{
	$sql = "SELECT * FROM atm_database";

}
$result = mysqli_query($connect, $sql);

// $output = array('data') => array());

// if($result ->num_rows > 0){

while($row = mysqli_fetch_array($result))
{
	// echo "<pre>";
	// print_r($row);
	// echo "<pre";

	 $terminalName =  $row[2] ;
	 $atmBrand = $row[11];
	 $vendor =  $row[18] ;
	 $custodianName =  $row[15] ;
	$custodianNumber =  $row[16] ;
	$terminalFK = $row[0];

	 // $terminalName = $row["terminal_name"];		
	 // $atmBrand =  $row["atmbrand_FK"] ;
	 // $vendor =  $row["vendor_FK"] ;
	 // $custodianName =  $row["custodian_name"] ;
	 // $custodianNumber =  $row["custodian_mobile"] ;

	 $output = array( 
	 		$terminalName,
	 		$atmBrand,
	 		$vendor,
	 		$custodianName,
	 		$custodianNumber,
	 		$terminalFK

	 		);

}
// }






 // echo $terminalName;
 // echo $atmBrand;
 // echo $vendor;
 // echo $custodianName;
 // echo $custodianNumber;

}

echo json_encode($output);


?>
