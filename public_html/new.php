<?php
header('Content-type: application/json; charset=utf-8');
	require_once 'dbconfig.php';
	
	$query = "SELECT * FROM api ORDER BY id DESC";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
	
	$userData = array();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		
		$userData['feed'][] = $row;
		
	}
	
	echo json_encode($userData);

?>