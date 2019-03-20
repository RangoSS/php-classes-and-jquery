<?php
include "dbClass.php";

class manage extends db{
	
 var $username;
 var $password;

function __construct($user,$pins){


	$this->username=$user;
	$this->password=$pins;

}
	function logins(){
		session_start();

       $_SESSION['usernam']=htmlspecialchars($_POST['usernam']); 

		$sql="SELECT username,user_password,job_type from staff where username='$this->username' AND user_password='$this->password' ";
          $result=mysqli_query($this->connect(),$sql);
         
          $recordcount = mysqli_num_rows($result);
               
			if($recordcount > 0){
              
               header('location:leaveApply.php');

			}
			else{
				 
				echo ('incorrect pin');
				header('location:login.php');
			}
		
          print_r($recordcount);
          return $recordcount;
	}
	
	

}

$username=$_POST['usernam'];
$password=$_POST['password'];

$man=new manage($username,$password);
$man->logins();
?>