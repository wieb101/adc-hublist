			<?php
				include_once('header.php');
			?>
	<body>
			<?
				
  				include_once('db.php');
				include_once('adc.php');
				$link = connect();
				$hub = getHubByID($HTTP_GET_VARS["hub"]);
			?>

			<h1><? echo $hub->name; ?></h1>		
			<h2><? echo $hub->description; ?></h2>
								
			<? 
				include_once('info.php'); 
			 	include_once('statistics.php'); 
			 	include_once('debug.php'); 
			
			 	mysql_close($link); 
			?>
			
			<p class='right'> <a href='index.php'> <? echo TEXT_LINK_RETURN ?> </a> </p>

			

	</body>
</html>
