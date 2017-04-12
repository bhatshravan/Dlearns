 <!--?php
$servername = "mysql1.000webhost.com";
$username = "a5108394_1";
$password = "shr123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?--> 
<!--!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html>
<head>
<title>API</title>

</head>

<body>
echo json_encode($userData);<br><br>

<?php

	require_once 'dbconfig.php';
	
	$query = "SELECT * FROM api";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
	
	$userData = array();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		
		$userData['Feed'][] = $row;
		
	}
	
	

 // gen XML result
                $sCode = '';
                if (count($aData)) {
                    foreach ($aData as $i => $aRecords) {
                        $sCode .= <<<EOF
<unit>
    <id>{$aRecords['id']}</id>
    <title>{$aRecords['title']}</title>
    <author>{$aRecords['author']}</author>
    <image>{$aRecords['thumb']}</image>
    <views>{$aRecords['views']}</views>
</unit>
EOF;
                    }
                }

                header('Content-Type: text/xml; charset=utf-8');
                echo <<<EOF

EOF;
?>


</body>
</html>
{

    "feed": [
        {
            "id": 1,
            "name": "~Firewolf soon to launch KSIT app",
            "image": null,
            "status": "Being the awesomest person in hard,but Shravan being the best is soon to release a great app",
            "profilePic": "http://orig04.deviantart.net/4be1/f/2013/133/b/4/simple_battle_born_by_lechiffre17-d6544k6.jpg",
            "timeStamp": "1403375851930",
            "url": null
        },
             {
            "id": 2,
            "name": "Mini militia played in CSE B was awesome",
            "image": null,
            "status": "The recent mini militia competetion held every short break and lunch break garnered new visitors and thus became one of the must awaited event of the day",
            "profilePic": null,
            "timeStamp": "1475688420",
            "url": "google.com"
        },
    {
            "id": 3,
            "name": "Kakade wins lottery",
            "image": null,
            "status": "After getting into a good fight with Rakesh, Suhas kakade discovered a lottery ticket behind his bag thus winning a faltu lottery",
            "profilePic": null,
            "timeStamp": "1403375851930",
            "url": ""
        },
      {
            "id": 4,
            "name": "Dum dum duma",
            "image": null,
            "status": "Dum dum duma? (Edited by the minions)",
            "profilePic": "http://orig04.deviantart.net/4be1/f/2013/133/b/4/simple_battle_born_by_lechiffre17-d6544k6.jpg",
            "timeStamp": "1403375851930",
            "url": ""
        } ,
        {
            "id": 5,
            "name": "Forum ze link",
            "image": null,
            "status": "Dum dum duma? (Edited by the minions)",
            "profilePic": "http://orig04.deviantart.net/4be1/f/2013/133/b/4/simple_battle_born_by_lechiffre17-d6544k6.jpg",
            "timeStamp": "1403375851930",
            "url": "www.omegawar3.byethost4.com/vanilla"
        },
{
            "id": 6,
            "name": "Forum of Mama mia",
            "image": null,
            "status": "Testing",
            "profilePic": null,
            "timeStamp": "1403375851930",
            "url": null
        }



    ]

}