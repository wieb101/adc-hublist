	<p class='bold'> <? echo TITLE_TEXT_INFO ?> </p>
	<table>
		<tr> 
			<td class='detail'> <p> <? echo TEXT_NAME ?> </p> </td> 
			<td> <p><? echo $hub->name; ?> </p> </td> 
		</tr>
		<tr> 
			<td class='detail'>  <p> <? echo TEXT_DESCRIPTION ?> </p> </td> 
			<td> <p><? echo $hub->description; ?> </p> </td> 
		</tr>
		<tr> 
			<td class='detail'>  <p> <? echo TEXT_ADDRESS ?> </p> </td> 
			<td> <p> <a href='adc://<? echo $hub->address;?>:<? echo $hub->port; ?>'>adc://<? echo $hub->address;?>:<? echo $hub->port ?></a> </p> </td> 
			<td> <p> <a href='checkhub.php?hub=<? echo $hub->hubID;?>'>check</a></p></td>
		</tr>
		<tr>
			<td class='detail'>  <p> <? echo TEXT_LOC ?> </p> </td>
			<td> <h2><img src='/images/<? echo $hub->country;?>.gif' alt='' ><? echo $countryName;?></h2> </td>
		</tr>
		<tr>
			<td class='detail'>  <p> <? echo TEXT_HSOFT ?> <p> </td>
			<td> <p><? echo $hub->version; ?> </p> </td>
		</tr>
	</table>