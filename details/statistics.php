	<p class='bold'> <? echo TITLE_TEXT_STAT ?> </p>
	<table>
		<tr>
			<td class='detail'>  <p> <? echo TEXT_STATUS ?> </p> </td>
			<td> <p> <? echo $hub->status ?>(<? echo TEXT_CHECKED ?> <? echo $hub->lasttime; ?>) </p> </td>
		</tr>
		<tr>
			<td class='detail'>  <p> <? echo TEXT_RELIABILITY ?> <p> </td>
			<td> <p> <? echo precentageOnline($hub->onlinecount, $hub->checkcount); ?>% (<? TEXT_ONLINE ?> <? echo $hub->onlinecount; ?>/<? echo $hub->checkcount; ?> <? echo TEXT_TIMES ?>)</p> </td>
		</tr>
	</table>
	
	
<?php 

	function precentageOnline($onlinecount, $checkcount) 
	{
		if ($onlinecount > 0 and $checkcount > 0) 
		{
			return round($onlinecount / ($checkcount / 100),2);					
		}
		return "-";
	}

?>