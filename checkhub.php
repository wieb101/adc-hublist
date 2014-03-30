<?php
	include_once('config.php');
	include_once('db.php');
	include_once('adc.php');
	connect();	
	

	if (isset($HTTP_GET_VARS["hub"])) 
	{
		$hub = $HTTP_GET_VARS["hub"];
		$a = getHubByID($hub);
	}
	else 
	{
		$a = getLastCheckedHub();
	}

	if ($a) 
	{
		setHubOffline($a->hubID);

		$client = new ADCClient();
		$client->pid = $pid;
		$client->id = $id;
		$client->version = $version;
		$client->nick = "pinger";
	
		$a->country = getCountry($a->address);

		login($a, $client);
		$a->checkcount++;
		if ($a->online == 1) 
		{
			$a->onlinecount++;
			updateHub($a);
		}
		
		mysql_close();	
		echo "-----------------------------------------------<br />";
			
		echo "Hub name: " . $a->hubname . "<br />";
		echo "Description: " . $a->description . "<br />";
		echo "Hub software: " . $a->software . "<br />";
		echo "Usercount: " . $a->usercount . "<br />";
		echo "Totalshare: " . $a->totalshare . "<br />";
		
		require_once("buildxml.php");
		
	}
	else 
	{
		echo ".";
	}

	
?>