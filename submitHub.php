<?  
	include_once('header.php');
	include_once('config.php');
	include_once('db.php');
	connect();	

	if (substr($address, 0, 6) == "adc://" ) {
		$address = substr( $address, 6, strlen($address) );	
	}	
	$port = 411;		
	if (strpos($address, ":") > -1 ) {
		$hubaddress = substr( $address, 0, strpos($address, ":") );	
		$port = substr( $address, strpos($address, ":") + 1, strlen($address) - strpos($address, ":") - 1 );
		if ($port == "") {
			$port = 411;
		}	
	}
	else {
		$hubaddress = substr( $address, 0, strlen($address) );
	}

	$query = "SELECT address FROM hub WHERE address = '" . escape_string($hubaddress) . "' AND port = '" . escape_string($port) . "'";
	
	$result = mysql_query($query);
	if ( mysql_num_rows($result) > 0 ) {
		$outmessage = "This hub address is already in our database.";
	}	
	else {	
		$handle = fsockopen("tcp://".$hubaddress, $port);
		$outmessage = "Could not connect to your hub.";
		if ( $handle ) {	
			fwrite($handle, "HSUP ADBAS0\n");
			$message = fgets($handle, 1024);
			if (substr($message,0,4)=="ISUP") {
				$query = "INSERT INTO hub (address, port, status) VALUES('" . escape_string($hubaddress) . "', '" . escape_string($port) . "', '2')";	
				fclose($handle);		
				if (mysql_query($query)) {			
					$outmessage = "You have succesfully added your hub.";
				}	
			}
		}
	}
	mysql_close();
		
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
	<html lang = "EN">
		<head>
			<link rel="stylesheet" type="text/css" href="style.css">
			<title>Submit your ADC hub</title>
		</head>
		<body>
			<table cellspacing='1' cellpadding='2'>
				<tr> 	
					<td>
						<p>&nbsp;</p> 						
						<h2 class='center'><?php echo $outmessage; ?></h2>	
						<p class='center'>  <a href='index.php'>go back</a> </p>					
						<p>&nbsp;</p> 
					</td>
				</tr>
			 </table>
		</body>
	</html>	