<html>
<body>

<?php 

require_once 'dbconfig.php';
	

$ytable=$_POST["table"];
$yname=$_POST["name"];
$yimage=$_POST["image"];



$query = "INSERT INTO dg (name, thumb,rate) VALUES ('".$yname."','".$yimage."','".$ytable."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

 
echo "<center><h1>POSTED ONLY NAME,IMG,RATE</h1></center><hr><br>";


echo "Table:".$ytable."<br>";
echo "Name:".$yname."<br>";
echo "Status is:".$ystatus."<br>";
echo "Image url is: ".$yimage."<br>";
echo "Url: ".$yurl."<br>";
echo "Time: ".$tim."<br>";
echo "Profile:".$pro."<br>";

 ?>
</body>
</html>