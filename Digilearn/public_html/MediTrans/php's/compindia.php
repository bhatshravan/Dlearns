<html>
<body>

<?php 

require_once 'dbconfig.php';
	
$cname=$_POST["cname"];
$email=$_POST["email"];
$desc=$_POST["textt"];
$exp=$_POST["exp"];
$hf=$_POST["hf"];
$cweb=$_POST["cweb"];
$phone=$_POST["phone"];
$urll=$_POST["url"];
$tim= time();



if (empty($_POST["cname"])) 
	$cname="null";
if (empty($_POST["email"])) 
	$email="null";
if (empty($_POST["textt"])) 
	$desc="null";
if (empty($_POST["exp"])) 
	$exp="null";
if (empty($_POST["hf"])) 
	$hf="null";
if (empty($_POST["cweb"])) 
	$cweb="null";
if (empty($_POST["phone"])) 
	$phone="null";
if (empty($_POST["urll"])) 
	$urll="null";


/*

$query = "INSERT INTO ".$ytable." (name, status,image,profilePic,timeStamp) VALUES ('".$yname."','".$ystatus."','".$yimage."','".$pro."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
*/
 
echo "<center><h1>POSTED ALL DETAILS.PLEASE NOTE IT MAY TAKE UPTO 12 HOURS TO BE IN APP</h1></center><hr><br>";
  
/*


echo ($cname+" "+$email+" "+$desc+" "+$exp+" "+$hf+" "+$cweb+" "+$phone+" "+$uurl+" ");


echo "Table:".$ytable."<br>";
echo "Name:".$yname."<br>";
echo "Status is:".$ystatus."<br>";
echo "Image url is: ".$yimage."<br>";
echo "Url: ".$yurl."<br>";
echo "Time: ".$tim."<br>";
echo "Profile:".$pro."<br>";
*/
 ?>
</body>
</html>