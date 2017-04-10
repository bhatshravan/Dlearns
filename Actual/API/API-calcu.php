<HTML><head><TITLE>Omega warriors</TITLE></head>
<BODY>
<p>

			<?php
			
			/* Replace with the token you get from the site 
				1. go to https://developer.clashofclans.com/#/register 
				2. make an account
				3. log in
				4. in the right corner, open the combobox with your name, choose "My Account"
				5. Create a new key
				6. click on the link, you can see the key, select and copy it in the variable $accesstoken
				7. personnalize the variable $url with the tag of your own clan
			*/
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
						
				/* $badge = $parsed_json->{'badgeUrls'}->{'small'};
				echo ('<img src="'.$badge.'"align="left""</img><br>'); */
				/* -- */
				$tag = $parsed_json->{'tag'};
				echo ('Clan tag: '.$tag. '<br>');
				/* -- */
				$nom = $parsed_json->{'name'};
				echo ('Clan name: '.$nom. '<br>');
				/* -- */
				$cloc = $parsed_json->{'location'}->{'name'};
				echo ('Clan location: '.$cloc. '<br>');
				/* -- */
				$type = $parsed_json->{'type'};
				echo ('Clan type: '.$type. '<br>');
				/* -- */
				$clev = $parsed_json->{'clanLevel'};
				echo ('Clan level: '.$clev. '<br>');
				/* -- */
				$cno = $parsed_json->{'members'};
				echo ('No. of members : '.$cno. '<br>');
				/* -- */
				$trop_req = $parsed_json->{'requiredTrophies'};
				echo ('Trophies Required : '.$trop_req. '<br>');
				/* -- */
				$description_clan = $parsed_json->{'description'};
				echo ('Description : '.$description_clan. '<br>');
				/* -- */
				$total_points = $parsed_json->{'clanPoints'};
				echo ('Clan points : '.$total_points. '<br>');
				/* -- */
				for ($i=0; $i < $cno; $i++) {
					$rank = $parsed_json->{'memberList'}[$i]->{'clanRank'};
					echo ('Rank : '.$rang.'<br>');
					$Mem_name = $parsed_json->{'memberList'}[$i]->{'name'};
					echo ('Name of member : '.$Mem_name.'<br>');
					$role = $parsed_json->{'memberList'}[$i]->{'role'};
					echo ('Role : '.$role.'<br>');
					$experience = $parsed_json->{'memberList'}[$i]->{'expLevel'};
					echo ('Experience : '.$experience.'<br>');
					$mem_league = $parsed_json->{'memberList'}[$i]->{'league'}->{'name'};
					echo ('League : '.$mem_league.'<br>');
					$img = $parsed_json->{'memberList'}[$i]->{'league'}->{'iconUrls'}->{'small'};
					echo ('Image : <img src="'.$img.'"align="center""</img><br>');
					$mem_tro = $parsed_json->{'memberList'}[$i]->{'trophies'};
					echo ('Trophies : '.$mem_tro.'<br>');
					$mem_don = $parsed_json->{'memberList'}[$i]->{'donations'};
					echo ('Troops donated : '.$mem_don.'<br>');
					$mem_req = $parsed_json->{'memberList'}[$i]->{'donationsReceived'};
					echo ('Troops requested: '.$mem_req.'<br>');
					echo '<hr>';
					
					$rati=$mdon/$mreq;
					$ratio=round($rati,3);
					echo ('Troops ratio:'.$ratio.'<br>');
					
					$c_rat[$i] = $ratio;					
				}
			?>
		</p>
</BODY>
</HTML>








