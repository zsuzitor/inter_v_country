


<?php


require_once("/view/_Layout.php");
require_once("/view/partial/Add_new_country_form.php");
require_once("/view/partial/One_country_for_list_view.php");

function ListCountryRender($array){
	

	
	
	echo'<div class="main_div">';
	LayoutRenderStart("Countries");
	AddNewCountryFormRender();
	echo'<div id="div_list_country" class="div_list_country"><hr/>';
	foreach ($array as $obj) {
		
    One_country_for_list_view_Render($obj);
	echo "<hr/>";
	
}
echo'</div>';
	echo'</div>';
	
	
	LayoutRenderEnd();
	
}
?>





