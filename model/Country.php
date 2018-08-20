

<?php



class Country{
	
	public $id;
	public $name;
	public $number_of_cities;
	public $population;
	public $monarchy;

	
	public function __construct(){
		$this->id=null;
		$this->name=null;
		$this->number_of_cities=null;
		$this->population=null;
		$this->monarchy=null;
	}

	public static function GetClassObject($array){
		$res=new Country;
		//echo $array["id"];
		if(isset($array["id"]))
	$res->id=$array["id"];

		if(isset($array["name"]))
	$res->name=$array["name"];
if(isset($array["number_of_cities"]))
	$res->number_of_cities=$array["number_of_cities"];
if(isset($array["population"]))
	$res->population=$array["population"];
if(isset($array["monarchy"]))
	$res->monarchy=$array["monarchy"];
		//echo $res->name;
		return $res;
	}
	
public static function ValidationArray($array){//,$full=false,$connect=null


if(!isset($array["name"]))
	return null;
if(!isset($array["number_of_cities"]))
	return null;
if(!isset($array["population"]))
	return null;
if(!isset($array["monarchy"]))
	return null;
// if($full){
	// if(!is_null($connect)){
		// throw new  Exception('connect==null');
		// return null;
	// }
		// ValidationInputArray($array,$connect);
	
// }
	


$res=new Country;

if(isset($array["id"]))
	$res->id=$array["id"];

$res->name=$array["name"];
$res->number_of_cities=$array["number_of_cities"];
$res->population=$array["population"];

echo "+++--+".$array["monarchy"];
if(is_string($array["monarchy"])){
	 if(strcmp($array["monarchy"],"true")===0)
		 $array["monarchy"]=1;
	 else
		 $array["monarchy"]=0;
 }
echo "++++".$array["monarchy"];

$res->monarchy=(bool)$array["monarchy"];
// if($array["monarchy"])
// $res->monarchy=true;
// else
	// $res->monarchy=false;

return $res;
}	
	
}

?>

