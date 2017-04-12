<?php

$url= htmlspecialchars($_GET["id"]);

header('Content-type: application/json; charset=utf-8');
	require_once 'dbconfig.php';
	
	$query = "SELECT * FROM dg where id=".$url.";";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
	
	$userData = array();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		
		$userData['feed'][] = $row;
		
	}
	
	echo json_encode($userData);


?>