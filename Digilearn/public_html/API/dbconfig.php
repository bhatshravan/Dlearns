<?php
	
	$DBhost = "mysql1.000webhost.com";
	$DBuser = "a5108394_1";
	$DBpass = "shr123";
	$DBname = "a5108394_api";
	
	try{
		
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $ex){
		
		die($ex->getMessage());
	}
