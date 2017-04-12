<?php 

header('Content-type: application/json; charset=utf-8');

	echo "{ \"feed\":";
$accesstoken = 'QDpDtwAmAUmshHCShpg94ptxUXymp1YOEHbjsnzG5T9zeSERSV';
			$url = 'https://igdbcom-internet-game-database-v1.p.mashape.com/games/?fields=*&limit=50'; /* copy your own tag */
			$ch = curl_init(htmlspecialchars($url));
			$headr = array();
			$headr[] = 'Accept: application/json';
			$headr[] = 'X-Mashape-Key:'.$accesstoken;
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			
			$json = curl_exec($ch);
			$p = json_decode($json);
echo "}";?>