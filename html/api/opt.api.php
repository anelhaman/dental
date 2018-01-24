<?php
require_once '../autoload.php';
header("Content-type: application/json");

	$returnObject = array(
		"apiVersion"  	=> 1.0,
		"execute"     	=> floatval(round(microtime(true)-StTime,4)),
  );
	
	$data = $_POST;
	$returnObject['data'] = $data;


 echo json_encode($returnObject);
?>