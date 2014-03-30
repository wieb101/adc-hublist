<?php

	/*
		This file contains all database related functions.
	*/



	/*
		Connects to the database that has been configured in 'config.php'.
	*/
	function connect() 
	{		
		include('config.php');
		$link = mysql_connect($hostName, $userName, $password) or die("Unable to connect to host $hostName");
		mysql_select_db($dbName) or die("Unable to select database $dbName");
		return $link;
	}


	
	/*
		Function that escapes "special" characters. It's wise to do that
		before using strings within sql queries that are coming from outside.
	*/
	function escape_string($string) 
	{
   		if ( version_compare(phpversion(),"4.3.0") == "-1" ) 
		{
     			return mysql_escape_string($string);
   		} 
   		else 
		{
     			return mysql_real_escape_string($string);
   		}
	}

	function getHubByID($id) 
	{
		 
		if (is_numeric($id)) 
		{ 		
			$result = mysql_query("SELECT * FROM hub WHERE hub_id = '$id'");
			if ($result) 
			{
				$hub = new ADCHub();
				$hub->hubID = $id;
				$hub->name = mysql_result($result, 0, "name");
				$hub->description = mysql_result($result, 0, "description");
				$hub->address = mysql_result($result, 0, "address");
				$hub->port = mysql_result($result, 0, "port");
				$hub->checkcount = mysql_result($result, 0, "check_count");
				$hub->onlinecount = mysql_result($result, 0, "online_count");
				$hub->lasttime = mysql_result($result, 0, "last_time_checked");
				$hub->debug = mysql_result($result, 0, "debug");
				$hub->$status = statusToString(mysql_result($result, 0, "status"));
				
				$hub->tld = mysql_result($result, 0, "country");
				$hub->country = getCountryNameByTLD($hub->tld);
								
				$hub->version = mysql_result($result, 0, "version");
				return $hub;
			}
		}

		return false;

	}
	
	function getLastCheckedHub() 
	{
		$result = mysql_query("SELECT * FROM hub ORDER BY last_time_checked LIMIT 1");
		if ($result) 
		{
			$hub = new ADCHub();
			$hub->hubID = mysql_result($result, 0, "hub_id");
			$hub->name = mysql_result($result, 0, "name");
			$hub->description = mysql_result($result, 0, "description");
			$hub->address = mysql_result($result, 0, "address");
			$hub->port = mysql_result($result, 0, "port");
			$hub->checkcount = mysql_result($result, 0, "check_count");
			$hub->onlinecount = mysql_result($result, 0, "online_count");
			$hub->lasttime = mysql_result($result, 0, "last_time_checked");
			$hub->debug = mysql_result($result, 0, "debug");
			$hub->$status = statusToString(mysql_result($result, 0, "status"));
				
			$hub->tld = mysql_result($result, 0, "country");
			$hub->country = getCountryNameByTLD($hub->tld);
								
			$hub->version = mysql_result($result, 0, "version");
			return $hub;
		}
		return false;
	}
	
	function setHubOffline($id)
	{
		$updateQuery = "update hub SET status = '0', last_time_checked = NOW() WHERE hub_id = '$id'";
		mysql_query($updateQuery) or die(mysql_error());
	}
	
	function updateHub(&$a)
	{
		$updateQuery = "update hub SET " . 
						"name = '" . escape_string($a->hubname) . "'," .
					   " description = '" . escape_string($a->description) . "'," . 
					   " status = '" . escape_string($a->online) . "'," . 
					   " version = '" . escape_string($a->software) . "'," . 
					   " last_time_checked = " . escape_string('NOW()') . "," .
					   " check_count = '" . escape_string($a->checkcount) . "'," .
					   " online_count = '" . escape_string($a->onlinecount) . "'," .
					   " country = '" . escape_string($a->country) . "'," .   
					   " debug = '" . escape_string($a->debug) . "'," .
					   " usercount = '" . escape_string($a->usercount) . "'," .
					   " shared = '" . escape_string($a->totalshare) . "'" .
					   " WHERE hub_id = '" . escape_string($a->hubID) . "'";

		mysql_query($updateQuery) or die(mysql_error()); 	
	}
		
	function statusToString($status) 
	{
		if ($status == 1) 
		{
			return "online";
		}
		else 
		{
			return "offline";
		}
	}

	function getCountry($address)
	{
		$hostname = gethostbyaddr(gethostbyname($address)); 
		$hostname_slizes = explode('.', $hostname); 
		$count_slizes = count($hostname_slizes); 
		$piece = $count_slizes - 1; 
		$extention = $hostname_slizes[$piece]; 
		$query = "SELECT tld FROM country WHERE tld = '$extention'";				 
		$result = mysql_query($query);
		$number = mysql_numrows($result);
		if ($number>0) {
			return $extention;
		}
		return "";
	}

	function getCountryNameByTLD($tld) 
	{
		$result = mysql_query("SELECT name FROM country WHERE tld = '$country'");
		if ($result) 
		{
			if (mysql_num_rows($result) > 0)
			{
				return mysql_result($cresult, 0, "name");
			}
		}

		return "unknown";
	}

?>