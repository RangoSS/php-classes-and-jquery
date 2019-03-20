<?php

class db{

var $db_host='localhost';
var $db_user='root';
var $db_name='assert_management';
var $db_lassword="";
//var $mydel;

/*function __construct($deles){
      $this->mydel=$deles;
}*/
function connect(){
$connectAssert= mysqli_connect($this->db_host,$this->db_user,$this->db_lassword,$this->db_name);

if (!$connectAssert){
   die('thanks i cant connect you'.mysqli_error($connectAssert));
}
else
{
	echo('thanks');
}

return $connectAssert;
}

function getRecods(){
	$sql="select * from staff";
	$result=mysqli_query($this->connect(),$sql);
	return $result;
}

function deleteUser(){
  
   echo "my name is <b>danies</b>".' ';
   		$id=$_GET['myid'];
	    $sql="DELETE from staff where staff_id='$id'"; 

	$results=mysqli_query($this->connect(),$sql) or die(mysqli_error($sql));

	return $results;
//}	
}
}



?>