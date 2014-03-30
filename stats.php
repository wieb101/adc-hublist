<?php include_once('header.php'); ?>

<body>
	<? 	
		
		include_once('db.php');
		connect();	
		include "libchart/libchart.php";
	?>
	<h1><? echo TITLE_GENERAL_STAT ?></h1>

		<p>&nbsp;</p>

		<?php
			
			$hubcount_query = "SELECT version, status, COUNT(version) AS amount FROM hub GROUP BY version ORDER BY amount DESC";
			$online_hub_chart = new PieChart(450, 250);
			$online_hub_chart->setTitle(LIBC_HUB_ONLINE);
			$offline_hub_chart = new PieChart(450, 250);
			$offline_hub_chart->setTitle(LIBC_HUB_OFFLINE);

		?>
           	<? 				
				$result = mysql_query($hubcount_query);
				if ($result) {
					for ($i=0; $i<mysql_num_rows($result); $i++) { 
							$status = mysql_result($result, $i, "status");
							$version = mysql_result($result, $i, "version");
							$amount = mysql_result($result, $i, "amount");
							if ($version == "") {
								$version = LIBC_UNKNOWN;
							}

							if ($status == 1) { 
								$online_hub_chart->addPoint(new Point($version . " (" . $amount . ")", $amount));
							} 

							if ($status == 0) { 
								$offline_hub_chart->addPoint(new Point($version . " (" . $amount . ")", $amount));
							} 

					}
					$online_hub_chart->render("generated/onlinehub.png");
					$offline_hub_chart->render("generated/offlinehub.png");
				} 
			?>		

			<p>&nbsp;</p>
			<table width="100%"  border="0">
              <tr>
                <td width="50%"><img src="generated/onlinehub.png" alt="no image available"></td>
				<td width="50%"><img src="generated/offlinehub.png" alt="no image available"></td>
              </tr>
            </table>
			<p>&nbsp;</p>
			<table width="100%"  border="0">			
			<?

				$query = "SELECT SUM(usercount) AS tuser FROM hub WHERE status = '1'";
				$result = mysql_query($query);
				if ($result) {
					$tuser_up = mysql_result($result, "tuser");		
					?>
						<tr> 						
							<td width="25%"><p> <? echo TEXT_TOTAL_USERS_ONLINE ?> </p> </td>			
							<td width="75%"><p> <? echo $tuser_up ?> </p></td>	
						</tr>
					<?		
				}
				
				$query = "SELECT SUM(shared) AS tshare FROM hub WHERE status = '1'";
				$result = mysql_query($query);
				if ($result) {
					$tshare_up = mysql_result($result, "tshare");
					?>
						<tr> 						
							<td width="25%"><p> <? echo TEXT_TOTAL_SHARED ?> </p></td>			
							<td width="75%"><p> <? echo round ($tshare_up/(1024*1024*1024), 2) ?> GB </p></td>	
						</tr>
					<?		
				}            
           
			?>
			</table> 
			<p>&nbsp;</p>

			<?
				$on_country = new PieChart(450, 225);
				$on_country->setTitle(LIBC_HUB_ONLINE);
				$off_country = new PieChart(450, 225);
				$off_country->setTitle(LIBC_HUB_OFFLINE);
								
				$query = "SELECT country, COUNT(country) AS country_count, status FROM hub GROUP BY country ORDER BY country_count DESC";
				$result = mysql_query($query);
				if ($result) {
					for ($i=0; $i<mysql_num_rows($result); $i++) {
							$status = mysql_result($result, $i, "status");
							$country = mysql_result($result, $i, "country");
							$amount = mysql_result($result, $i, "country_count");

							/*  user of seperate query here because i want unknown tld be showed rather as there tld then instead of
								nothing */
							$country_name = $country;

							$c_query = "SELECT name FROM country WHERE tld = '" . $country . "'";
							$c_result = mysql_query($c_query);
							if (c_result) {
								$country_name = mysql_result($c_result, 0, "name");
							}
							if ($country_name == "") {
								$country_name = LIBC_UNRESOLVED;
							}
																
							if ($status == 1) { 
								$on_country->addPoint(new Point($country_name . " (" . $amount . ")", $amount));
							} 

							if ($status == 0) { 
								$off_country->addPoint(new Point($country_name . " (" . $amount . ")", $amount));
							} 
					}		
					$on_country->render("generated/oncountry.png");
					$off_country->render("generated/offcountry.png");
				}				
				
			
			?>
			
			<p>&nbsp;</p>
			<table width="100%"  border="0">
              <tr>
                <td width="50%"><img src="generated/oncountry.png" alt="no image available"></td>
                <td width="50%"><img src="generated/offcountry.png" alt="no image available"></td>
              </tr>
            </table>
			<p class='right'> <a href='index.php'> <? echo TEXT_LINK_RETURN ?> </a> </p>

</body>
</html>
