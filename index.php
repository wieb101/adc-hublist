<?php
	include_once('header.php');

	include_once('db.php');
	connect();	
?>

<body>
		<h1>ADC hublist</h1>
		<table width="100%"  border="0" cellpadding="4" cellspacing="4">
          <tr>
            <td width="15%" height="19"><a href="submit.php" class="style2" > <? echo TEXT_LINK_SUBMIT ?></a></td>
            <td width="15%"><p class="bold">listings: <a href="index.php"> <? echo TEXT_LINK_ONLINE ?></a></p></td>
            <td width="15%"><a href="index.php?list=offline"> <? echo TEXT_LINK_OFFLINE ?></a></td>
            <td width="65%"><a href="index.php?list=all"> <? echo TEXT_LINK_ALL_HUBS ?></a></td>
          </tr>
        </table>
		<p>&nbsp;</p>
		<table cellspacing="1" cellpadding="2" summary="this is a list of adc hubs">
			<?php
				if ($HTTP_GET_VARS['list']=="offline") {
					$query = "SELECT * FROM hub WHERE status = '0'";
				}
				else if ($HTTP_GET_VARS['list']=="all") {
					$query = "SELECT * FROM hub";
				}
				else {
					$query = "SELECT * FROM hub WHERE status = '1'";
				}
				$result = mysql_query($query);
				
				if ($result) {
					$number = mysql_numrows($result);
			?>
			<tr> 
				<td></td>  						
				<td class='name'><h2><? echo TEXT_NAME ?></h2></td>			
				<td class='description'><h2><? echo TEXT_DESCRIPTION ?></h2></td>	
				<td> <h2> <? echo TEXT_USERS ?> </h2> </td>
				<td> <h2> <? echo TEXT_SHARED ?> </h2> </td>				
				<td></td>
  			</tr>
			<?
				for ($i = 0; $i < $number; $i++) {
					$hubID = mysql_result($result, $i, "hub_id");
					$name = mysql_result($result, $i, "name");
					$address = mysql_result($result, $i, "address");
					$description = mysql_result($result, $i, "description");
					$port = mysql_result($result, $i, "port");  
					$version = mysql_result($result, $i, "version");
					$last_time_checked = mysql_result($result, $i, "last_time_checked");
					$onlineCount = mysql_result($result, $i, "online_count");
					$checkCount = mysql_result($result, $i, "check_count");
					$country = mysql_result($result, $i, "country");
					$usercount = mysql_result($result, $i, "usercount");
					$shared = mysql_result($result, $i, "shared");
					if ($country == "") {
							$country = "unknown";
					}
			?>
				<tr> 
					<td> <p> <img src='/images/<? echo $country?>.gif' alt='' /> </p> </td>								
					<td> <p> <a href='adc://<? echo $address ?>:<? echo $port ?>'> <? echo $name ?> </a> </p> </td>								
					<td> <p> <? echo $description ?> </p> </td>						
					<td> <p> <? echo $usercount ?> </p ></td>
					<td> <p> <? echo round ($shared/(1024*1024*1024), 2)?> GB </p> </td>
					<td> <p> <a href='details.php?hub=<? echo $hubID ?> '> <img src='/images/detail.gif' alt='view details' /> </a> </p> </td>
				</tr>										
			<?php } // end for loop
							
			}	// end if result

			?>
		</table>
		<p>&nbsp;</p>
		<table width="100%"  border="0">
          <tr>
            <td><p><? echo TEXT_XML_COMPAT ?></p>
                <p><? echo TEXT_UNCOMPRESSED_LIST ?><strong>http://home.bandicoot.nl/adchublist.xml</strong></p>
                <p><? echo TEXT_COMPRESSED_LIST ?><strong>http://home.bandicoot.nl/adchublist.xml.bz2 </strong></p></td>
          </tr>
        </table>
        <p align="center"><a href="stats.php"><? echo TEXT_LINK_GENERAL_STAT ?></a></p>
</body>
</html>