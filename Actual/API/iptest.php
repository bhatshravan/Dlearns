<?php

			$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjIxNWEwNmQyLTQ1MjItNGVmYy1hNjBmLWZlYmVkZTYyMTY3OCIsImlhdCI6MTQ1NzAwNzQwNCwic3ViIjoiZGV2ZWxvcGVyLzBjY2RkYmMwLTVlZGYtZGFjNi0xOWVlLWQ0MGE2OTZiZjRmNSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjMxLjE3MC4xNjYuMSJdLCJ0eXBlIjoiY2xpZW50In1dfQ.Z3uK6Gmn4CSlrh1drrNXPCr6y8ORcq-tthB0mu2ecFYIE718mTVhzYUqZhGjjuIgldfDsr-ZQiZo0lfe7NVvsw'; /* copy your own key */

			$url = 'https://api.clashofclans.com/v1/clans/%2399QPPGUQ'; /* copy your own tag */
			$ch = curl_init(htmlspecialchars($url));

			$headr = array();
			$headr[] = 'Accept: application/json';
			$headr[] = 'Authorization: Bearer '.$accesstoken;

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			$json = curl_exec($ch);
			$parsed_json = json_decode($json);
					print_r($parsed_json);
echo "<br><br>";
//This one will show the IP that is listed in the cPanel
echo $_SERVER['SERVER_ADDR'];


echo "<br><br>API-IP: ";
//This is the IP that the API needs to successfully connect
echo file_get_contents("https://api.ipify.org");
?>