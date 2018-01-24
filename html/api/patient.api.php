<?php
require_once '../autoload.php';
header("Content-type: application/json");

	$returnObject = array(
		"apiVersion"  	=> 1.0,
		"execute"     	=> floatval(round(microtime(true)-StTime,4)),
	);
	$returnObject['method'] = $_SERVER["REQUEST_METHOD"];

switch ($_SERVER["REQUEST_METHOD"]) {
	case 'GET':

		$prescriptionno = $_GET["prescriptionno"] ;
		$visitdate 			= $_GET["visitdate"] ;
		$data 					= $patient->getDataPatient($visitdate,$prescriptionno);
		$status 				= $patient->getDataVisitDent($data['id']);

		$returnObject['data'] 	= $data;
		$returnObject['countStatus'] = $status;
		break;

	case 'POST': 

		$data = $patient->newRecord($_POST);
		$returnObject['data'] = $data;
		
		break;
	
	default:
		break;
}


echo json_encode($returnObject);

exit();
?>