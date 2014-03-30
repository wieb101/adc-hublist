<?php include_once('header.php'); ?>

	<body>
	
		<? 
			
			include_once('db.php');
			connect();	
		?>
		<h1><? echo TITLE_SUBMIT ?> </h1>
		<p><a href="index.php"><? echo TEXT_LINK_RETURN ?></a></p>
		<form name="form1" method="post" action="submitHub.php">
  			<table width="100%" border="5" cellpadding="0" cellspacing="10">
   			

    			<tr> 
      				<td valign="top"><h2><? echo TEXT_ADDRESS ?></h2></td>
      				<td valign="top"> <input name="address" type="text" size="75" maxlength="75"></td>
      				<td> <p> <? echo INFO_TEXT_ADDRESS ?></p>
        							<p>&nbsp;</p>
       	 						<p>&nbsp;</p>
        				</td>
    			</tr>

    			<tr> 
      				<td valign="top">&nbsp;</td>
      				<td valign="top"> <input type="submit" name="Submit" value="Submit"></td>
      				<td> <p><? echo INFO_TEXT_SUBMIT ?></p>
        							<p>&nbsp;</p>
				</td>
    			</tr>
  			</table>
  			<p class='red'><? echo NOTE_SUBMIT ?></p>
		</form>
	</body>
</html>