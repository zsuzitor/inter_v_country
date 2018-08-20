<?php
require_once("/view/list_country.php");
require_once("/model/Country.php");
require_once("/model/Validation.php");
require_once("/view/partial/One_country_for_list_view.php");


//TODO !!!!!!!!!
// echo $_POST['monarchy'];
// echo "+";
$arr_valid = array("name" =>  $_POST['name'], 
"number_of_cities" =>  $_POST['number_of_cities'], 
"population" =>  $_POST['population'], 
"monarchy" =>  $_POST['monarchy']);


$connect=mysqli_connect("localhost","root","","bd_inter_v");
//$tmp=null;
if(!isset($connect)){
//TODO exit??
echo "__error_";	
}
//echo "_-_-_".$arr_valid['name'];
ValidationInputArray($arr_valid,$connect);
// echo "-_-1_".$arr_valid['monarchy'];
/*
 if(is_string($arr_valid["monarchy"])){
	 if(strcmp($arr_valid["monarchy"],"true")===0)
		 $arr_valid["monarchy"]=true;
	 else
		 $arr_valid["monarchy"]=false;
 }*/

// echo "_-_-_".$arr_valid['name'];
//echo "______________".$arr_valid['monarchy'];

$obj=Country::ValidationArray($arr_valid);//,true
//var_dump($obj->monarchy);
if(is_null($obj)){
	echo "false12";
	return;
}
//print_r($obj);
//echo "_-_-_";
//var_dump($obj->name);
//echo "_-_-_";
// echo $obj->name;
// echo $obj->number_of_cities;
// echo $obj->population;
// echo $obj->id;
//echo "_-_-_";

//INSERT INTO table1 (username,...) VALUE ('foo',...); 
echo "-_-_";
var_dump($obj->monarchy);
$sql_code_string="INSERT INTO countries  (name, number_of_cities,population,monarchy)".
" VALUES ('".$obj->name."','".$obj->number_of_cities."','".$obj->population."','". $obj->monarchy ."')";//$obj->monarchy
echo $sql_code_string;
$result=mysqli_query($connect,$sql_code_string);
// echo "__". $obj->monarchy. "__";


$obj->id=mysqli_insert_id($connect);
 mysqli_close($connect);
 One_country_for_list_view_Render($obj);
 
 if(!$result){
	 echo "false11";
	return;
 }

 //INSERT INTO countries (name, number_of_cities,population,monarchy) VALUES ('SyntacticalModul',123,123,false);
//INSERT INTO `bd_inter_v`.`countries` (`name`,`number_of_cities`,`population`,`monarchy`) VALUES ('SyntacticalModul','123','123','false');

//CREATE TABLE `countries` (`id` INT(5) NOT NULL AUTO_INCREMENT, `name` VARCHAR(100) NOT NULL, `number_of_cities` INT(30) NOT NULL, `population` INT(30) NOT NULL, `monarchy` BIT(1) NOT NULL, PRIMARY KEY(`id`));
	



?>