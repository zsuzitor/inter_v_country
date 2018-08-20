<?php
require_once("/view/list_country.php");

$connect=mysqli_connect("localhost","root","","bd_inter_v");
//$tmp=null;
if(!isset($connect)){
//TODO exit??	
}

$sql_code_string="SELECT * FROM countries";
$result=mysqli_query($connect,$sql_code_string);
 
$data=mysqli_fetch_all($result,1);

ListCountryRender($data);
?>