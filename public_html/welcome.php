<html>
<body>

<?php 

require_once 'dbconfig.php';
	

$ytable=$_POST["table"];
$yname=$_POST["name"];
$ystatus=$_POST["status"];
$yimage=$_POST["image"];
$yurl=$_POST["url"];

$pro=$_POST["profile"];
$tim= time();



if (empty($_POST["image"])) 
{
 if(empty($_POST["profile"]))
  {
  $query = "INSERT INTO ".$ytable." (name, status,timeStamp) VALUES ('".$yname."','".$ystatus."','".$tim."')";
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
  echo "<center><h1>POSTED - NO IMAGE,NO PROFILE</h1></center><hr><br>";
  }

  else
{
if($pro=="nor")
{
$pro="http://orig04.deviantart.net/4be1/f/2013/133/b/4/simple_battle_born_by_lechiffre17-d6544k6.jpg";
$query = "INSERT INTO ".$ytable." (name, status,profilePic,timeStamp) VALUES ('".$yname."','".$ystatus."','".$pro."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

echo "<center><h1>Posted ONLY NAME,STATUS,NOR-PROFILE,IMAGE</h1></center><hr><br><br>";
}
else
{
$query = "INSERT INTO ".$ytable." (name, status,profilePic,timeStamp) VALUES ('".$yname."','".$ystatus."','".$pro."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

echo "<center><h1>Posted ONLY NAME,STATUS,NOR-PROFILE,NO IMAGE</h1></center><hr><br><br>";

}
}  
}


else if(empty($_POST["profile"]))
{
if (empty($_POST["image"])) 
{
$query = "INSERT INTO ".$ytable." (name, status,timeStamp) VALUES ('".$yname."','".$ystatus."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
  echo "<center><h1>POSTED - NO IMAGE,NO PROFILE</h1></center><hr><br>";

}

else
{
$query = "INSERT INTO ".$ytable." (name, status,image,timeStamp) VALUES ('".$yname."','".$ystatus."','".$yimage."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

echo "<center><h1>Posted NAME,STATUS,IMAGE,NO PROFILE</h1></center><hr><br>";
}
}

else
{
if($pro=="nor")
{
$pro="http://orig04.deviantart.net/4be1/f/2013/133/b/4/simple_battle_born_by_lechiffre17-d6544k6.jpg";
$query = "INSERT INTO ".$ytable." (name, status,image,profilePic,timeStamp) VALUES ('".$yname."','".$ystatus."','".$yimage."','".$pro."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

 
echo "<center><h1>POSTED ONLY NAME,STATUS,IMG,Nor-Profile</h1></center><hr><br>";
  }
else
{
$query = "INSERT INTO ".$ytable." (name, status,image,profilePic,timeStamp) VALUES ('".$yname."','".$ystatus."','".$yimage."','".$pro."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

 
echo "<center><h1>POSTED ONLY NAME,STATUS,IMG,Profile</h1></center><hr><br>";
  
}
}



echo "Table:".$ytable."<br>";
echo "Name:".$yname."<br>";
echo "Status is:".$ystatus."<br>";
echo "Image url is: ".$yimage."<br>";
echo "Url: ".$yurl."<br>";
echo "Time: ".$tim."<br>";
echo "Profile:".$pro."<br>";

 ?>
<!--

$yfcn=$_POST["fcn"];

if (empty($_POST["image"])) {

   "INSERT INTO ".$ytable." (name, status,timeStamp) VALUES ('".$yname."','".$ystatus."','".$tim."')";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
echo "<center><h1>POSTED</h1></center><hr><br>";
  }

if($fcn=="del")
{
$query = "DELETE FROM ".$ytable."WHERE id='".$yname."'";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();

echo "Deleted<br>";

}



&&!empty($_POST["image"])-->
</body>
</html>