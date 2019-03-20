
<?php
class conicting{
 var $db_host="localhost";

var $db_user="root";
var $db_nam="assert_management";
var $db_password="";
function getConnection(){



 $conn=mysqli_connect($this->db_host,$this->db_user,$this->db_password,$this->db_nam);

if (!$conn){
	die("you are not connect check your codes".mysqli_error($conn));
}
else{
	echo ("you are connected dany");
}
return  $conn;
}
}
$mym=new conicting();
//$mym->getConnection();
?>