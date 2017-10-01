<?php

require_once 'core.php'

$valid['success'] = array('succeess' => false, 'messages' => array());

if($_POST) {
	$terminalId = $_POST['terminalId'];
	$terminalName = $_POST['terminalName'];
	$atmBrand = $_POST['atmBrand'];
	$natureOfFault = $_POST['natureOfFault'];
	$vendor = $_POST['vendor'];
	$defaultGateway = $_POST['defaultGateway'];
	$custodianName = $_POST['custodianName'];
	$region = $_POST['region'];

}// /if $