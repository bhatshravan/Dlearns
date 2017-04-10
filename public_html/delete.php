<html>
<body>

<?php 

require_once 'dbconfig.php';
	

$ytable=$_POST["table"];
$yname=$_POST["id"];

$query = "DELETE FROM ".$ytable." WHERE id=".$yname.";";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

echo "Deleted<br>";
?>

</body>
</html>