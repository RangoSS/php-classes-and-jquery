<?php
abstract class Connecting {

	var $host="localhost";
	var $user="root";
	var $password="";
	var $db_table="orders";

	public function getConnection(){

	$conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_table) or die("u are worse");
	if(!$this->conn){
		alert("you are not connected bro");
	}
	return $conn;

}
//so here i have to specify wich variable am calling
public function queryConn($query){
    $conn=$this->getConnection();
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    return $result;
}
}
class Medicing extends Connecting{
	var $named="";
	var $quntity=0;

	function __construct($nam,$qunt){
       $this->named=$nam;
       $this->quantity=$qunt;
	}

	function setMedicine(){
		if($this->named !=="" && $this->quantity=="" || $this->quantity< 1){

			$res=$this->queryConn("INSERT INTO purchase(medicine,P_quantity)
			                       VALUES ('$this->named','$this->quntity')");

		}
	}

}

?>