<?php

###################### PROTECCI�N ######################
// Si se accede a �ste archivo se cierra la conecci�n
if(preg_match("/fix_url_string.php/" ,$_SERVER['REQUEST_URI']))
	exit("This file is not visible.");

if(isset($_G) && isset($_G['url_data_string'])) {
	
}	

?>