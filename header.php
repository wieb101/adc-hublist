<?

include_once 'config.php';			
include_once 'accept.php';

// set country to the default language
$country = $defaultlang;

// supported languages are in this array, as key the value that can be received by the browser through the HTTP_ACCEPT_LANGUAGES
// as value the name of the php file without the extension .php. Make sure that it's located in the language directory.
$sup_countries = array( 'en' => 'uk', 
						'en-gb' => 'uk',
						'en-us' => 'uk',
						'sv'=> 'se', 
						'nl'=> 'nl', 
						'nl-be' => 'nl', 
						'no' => 'no',
						'no-nb' => 'no',
						'nb' => 'no', 
						'de' => 'de',
						'de-de' => 'de',
						'de-at' => 'de',
						'de-li' => 'de',
						'de-lu' => 'de',
						'de-ch' => 'de',
						'fi' => 'fi'
					   );

$accepted_lang = get_accepted_lang();
if ( $accepted_lang != NULL ) {
	 foreach ($accepted_lang as $key => $value) {
	 
		if ( isset($sup_countries[$key]) == true) {
			$country = $key;
		}
		else {
		}
		
	 }
}

if ( isset($sup_countries[$country]) == true ) {
	include_once( 'language/' . $sup_countries[$country] . '.php' ); 
}
else {
	include_once( 'language/' . $defaultlang . '.php' ); 
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="<? echo $country?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="description" content="an ADC hublist">
		<meta name="keywords" content="ADC, hublist, nmdc, direct connect, hubs">
  		<link rel="stylesheet" type="text/css" href="style.css">
		<title>ADC hublist</title>
	</head>
