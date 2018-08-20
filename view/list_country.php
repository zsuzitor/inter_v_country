


<?php


require_once("/view/_Layout.php");
require_once("/view/Add_new_country_form.php");


function ListCountryRender($array){
	

	
	
	echo'<div class="main_div">';
	LayoutRenderStart("Countries");
	AddNewCountryFormRender();
	echo'<div id="div_list_country" class="div_list_country">';
	foreach ($array as $obj) {
    echo $obj["id"];
	
}
echo'</div>';
	echo'</div>';
	
	
	LayoutRenderEnd();
	
}
?>





