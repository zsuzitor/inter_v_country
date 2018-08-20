

<?php

class Country{
	
	public $id;
	public $name;
	public $number_of_cities;
	public $population;
	public $monarchy;

	
	public __constuct(){
		id=null;
		name=null;
		number_of_cities=null;
		population=null;
		monarchy=null;
	}

public static ValidationArray($array){

$res=new Country;
if(!isset($array["name"]))
	return null;
if(!isset($array["number_of_cities"]))
	return null;
if(!isset($array["population"]))
	return null;
if(!isset($array["monarchy"]))
	return null;


if(isset($array["id"]))
	$res->id=$array["id"];

$res->name=$array["name"];
$res->number_of_cities=$array["number_of_cities"];
$res->population=$array["population"];
$res->monarchy=$array["monarchy"];

return res;
}	
	
}

?>

