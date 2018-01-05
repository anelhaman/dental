<?php
require_once '../autoload.php';
header("Content-type: application/json");

$prescriptionno = $_GET["prescriptionno"] ;
$visitdate = $_GET["visitdate"] ;

$returnObject = array(
	"apiVersion"  	=> 1.0,
	"execute"     	=> floatval(round(microtime(true)-StTime,4)),
);

$data = $patient->getDataPatient($visitdate,$prescriptionno);

$returnObject['data'] = $data;

echo json_encode($returnObject);

exit();
?>