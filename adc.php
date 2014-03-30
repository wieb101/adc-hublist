<?php
 	
	//adc://dcdev.no-ip.org:16591
	include('config.php');
	
	class ADCClient 
	{
		var $pid;
		var $id;
		var $sid;
		var $nick;
		var $version;
		
		function getINF() 
		{
			return 	$this->sid . " SUADC0,TCP4,UDP4 NI" . $this->nick . " SL0 ID" . $this->id . " PD" . $this->pid . " HN1 VE" . $this->version;
		}
	}
	
	class ADCHub 
	{
		var $online;
		var $checkcount;
		var $onlinecount;
		var $tld;
		var $country;
	 	var $address;
		var $port;
		var $hubname;
		var $description;
		var $software;
		var $usercount;
		var $totalshare;
		var $debug;
		var $sid;
		var $status;
		var $hubID;
 	}
	
	function handleIINF(&$adchub, &$message) 
	{
		$tok = strtok($message, " \n");
		while ($tok !== false) 
		{
			$tok = strtok(" \n");
			if (substr($tok, 0, 2) == "DE") 
			{
				$adchub->description = unEscapeText(substr($tok, 2));
			}
			else if (substr($tok, 0, 2) == "VE") 
			{
				$adchub->software = unEscapeText(substr($tok, 2));
			}
			else if (substr($tok, 0, 2) == "NI") 
			{
				$adchub->hubname = unEscapeText(substr($tok, 2));
			}	
		}		
	}
	
	function handleBINF(&$adchub, &$message) 
	{
		$tok = strtok($message, " \n");
		while ($tok !== false) 
		{
			$tok = strtok(" \n");
			if (substr($tok, 0, 2) == "SS") 
			{
				$sharesize = substr($tok, 2);
				$adchub->totalshare+=$sharesize;
			}
		}
	}
	
	function login(&$adchub, &$client) 
	{
		include('config.php');
		$handle = fsockopen("tcp://" . $adchub->address, $adchub->port);
		echo "trying to connect to: " . $adchub->address . ":" . $adchub->port;
		if ($handle) 
		{
			echo "connected.";
			fwrite($handle, "HSUP ADBAS0\n");
			$message = fgets($handle, 1024);
			
			if (substr($message, 0, 4) == "ISUP") 
			{
				$adchub->online = 1;
				$message = fgets($handle, 1024);
				if (substr($message, 0, 4) == "ISID") 
				{
					$client->sid = substr($message, 5, 4);
					fwrite($handle, "BINF " . $client->getINF() . "\n");
				}
		
				$message = fgets($handle, 1024);
				if (substr($message, 0, 4)=="IINF") 
				{	
					handleIINF($adchub, $message);
					
					while(!strstr($message, "NI" . $client->nick)) 
					{	
						$message = fgets($handle, 1024);
						echo $message . "<br/>";
						if (substr($message, 0, 4) == "BINF") 
						{
							$adchub->usercount++;
							handleBINF($adchub, $message);
						}
					}
				}
				
			}
		}
	}


	function unEscapeText($text) 
	{
		$text = str_replace("\\s", " ", $text);
		$text = str_replace("\\n", " ", $text);
		return $text;
	}


	function timestamp() 
	{
		return "[" . date("H:i:s") . "]";
	}

?>