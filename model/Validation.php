
<?php

function ValidationInputArray(&$array,$db){
	
	foreach ($array as &$value) {
    ValidationInputString($value,$db);
}
	
	
}


function ValidationInputString(&$str,$db){
	if(!is_null($str))
		$str=htmlentities(mysqli_real_escape_string($db, $str), ENT_QUOTES, 'UTF-8');
}

?>


