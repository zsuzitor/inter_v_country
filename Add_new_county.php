<?php
require_once("/view/list_county.php");
require_once("/view/Country.php");





$arr_valid = array("name" => htmlentities(mysqli_real_escape_string($link, $_POST['name'])), 
"number_of_cities" => htmlentities(mysqli_real_escape_string($link, $_POST['number_of_cities'])), 
"population" => htmlentities(mysqli_real_escape_string($link, $_POST['population'])), 
"monarchy" => htmlentities(mysqli_real_escape_string($link, $_POST['monarchy'])));

$obj=Country::ValidationArray($arr_valid);
if(is_null($obj)){
	echo "false";
	return;
}

$connect=mysqli_connect("localhost","root","","bd_inter_v");
//$tmp=null;
if(!isset($connect)){
//TODO exit??	
}
//INSERT INTO table1 (username,...) VALUE ('foo',...); 
$sql_code_string="INSERT INTO countries  (name, number_of_cities,population,monarchy)".
" VALUE ($obj->name,$obj->number_of_cities,$obj->population,$obj->monarchy,)";
$result=mysqli_query($connect,$sql_code_string);
 
 if(!$result){
	 echo "false";
	return;
 }


	



?>