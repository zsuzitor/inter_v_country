


<?php


require_once("/view/_Layout.php");
require_once("/view/Add_new_country_form.php");


function ListCountryRender($array){
	

	
	
	echo'<div class="main_div">';
	LayoutRenderStart("Countries");
	ListCountryRender();
	
	foreach ($array as $obj) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
	
	
	
}
	echo'</div>';
	
	
	LayoutRenderEnd();
	
}
?>





