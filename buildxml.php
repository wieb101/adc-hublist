<?php 

	include_once('header.php');

	include_once('db.php');
	connect();	

	//include('config.php');	
	//mysql_connect($hostName, $userName, $password) or die("Unable to connect to host $hostName");
	//mysql_select_db($dbName) or die("Unable to select database $dbName");

	// build xml file
	$doc = domxml_new_xmldoc("1.0");
	$hublist = $doc->add_root('Hublist');
				$hublist->set_attribute ("Name", "ADC Hublist");
				$hublist->set_attribute ("Address", "home.bandicoot.nl/adchublist.xml");
				
		$hubs = $hublist->new_child('hubs');
				$columns = $hubs->new_child('Columns');
					$name = $columns->new_child('Column');
						$name->set_attribute("Name", "Name");
						$name->set_attribute("Type", "string");
					$addr = $columns->new_child('Column');
						$addr->set_attribute("Name", "Address");
						$addr->set_attribute("Type", "string");
					$descr = $columns->new_child('Column');
						$descr->set_attribute("Name", "Description");
						$descr->set_attribute("Type", "string");		
					$port = $columns->new_child('Column');
						$port->set_attribute("Name", "Port");
						$port->set_attribute("Type", "int");	
					$country = $columns->new_child('Column');
						$country->set_attribute("Name", "Country");
						$country->set_attribute("Type", "string");
					$country = $columns->new_child('Column');
						$country->set_attribute("Name", "Shared");
						$country->set_attribute("Type", "int");
					$country = $columns->new_child('Column');
						$country->set_attribute("Name", "Users");
						$country->set_attribute("Type", "int");
						
		$query = "SELECT * FROM hub WHERE status = '1'";
		$result = mysql_query($query);
		if ($result) {
			$number = mysql_numrows($result);	
			
			for ($i = 0; $i < $number; $i++) {							
				$name = mysql_result($result, $i, "name");
				$address = mysql_result($result, $i, "address");
				$description = mysql_result($result, $i, "description");
				$port = mysql_result($result, $i, "port");  
				$country = mysql_result($result, $i, "country");
				$shared = mysql_result($result, $i, "shared");  
				$users = mysql_result($result, $i, "usercount");
				
				$hub = $hubs->new_child('Hub');
					$hub->set_attribute("Name", $name);
					$hub->set_attribute("Address", "adc://" . $address . ":" . $port);
					$hub->set_attribute("Description", $description);
					$hub->set_attribute("Port", $port);
					$hub->set_attribute("Country", $country);
					$hub->set_attribute("Shared", $shared);
					$hub->set_attribute("Users", $users);
			}
		}
	
	// save xml file
	$handle = fopen("adchublist.xml","w");
	if (!handle) {
		die('cannot create xml file.');
	}
	fwrite($handle, $doc->dumpmem());

	$bz = bzopen("adchublist.xml.bz2", "w");
	bzwrite($bz, $doc->dumpmem(), strlen($doc->dumpmem()));
	bzclose($bz);


?>