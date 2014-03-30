
<?php



function get_accepted_lang() {

	//nl,en;q=0.7,en-us;q=0.3
	
	$accept = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
	
	$accept_languages = array();
	
	//echo $accept;
	
	while( strlen($accept) != 0 ) {
		
		// pos of the comma.
		$pos = strpos($accept, ",");			
		
		// if comma not found , it might be the end of the string
		if ( $pos == false ) {		
		
			// set the pos to end of string
			$pos = strlen($accept);	
			
		}
		
		// the next language code + q value
		$lan = substr($accept, 0, $pos);		
		
		// the position of a possible ; in $lan
		$qpos = strpos($lan, ";");
		
		// if a ; and thus qvalue found
		if ($qpos != false) {

			// first construct the qvalue out of the lan, +3 here to remove ;q=
			$qvalue = substr($lan, $qpos + 3, strlen($lan));
			
		}
		else {
			
			// set it to default qvalue
			$qvalue = "1.0";
		
			// because we don't have a qvalue, set qpos to end of lan
			$qpos = strlen($lan);
			
		}
		
		// then construct a new lan code without q value
		$lan = substr($lan, 0, $qpos);
		
		// add the $lan as key and $qvalue as value to the accept_language array
		$accept_languages[$lan] = $qvalue;

		// construct new string and chop the first language code of it.
		$accept = substr($accept, $pos + 1);	
		
	}
	
	// if there are items in the array
	if ( isset ( $accept_languages ) ) {
	
		// sort the array on values
		asort( $accept_languages );
		return $accept_languages;		
		
	}

}
	

?>