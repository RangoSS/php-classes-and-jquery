
<?php
  include "dbClass.php";
 
  class Users extends db {
  	
   
 

      var $firstName;
      var $lastName;
      var $jobs;
      var $tax_input=0;
      var  $date1;
      var $date2;
     
   
        
     //if you pass variable of contstructor,you have to pass them as well on object
    public function __construct($name,$last,$jog,$ta,$dat,$dat2){
       //,$date,$date1
       $this->firstName=$name;
       $this->lastName=$last;
       $this->jobs=$jog;
       $this->tax_input=$ta;
      $this->date1=$dat;
      $this->date2=$dat2;
     
        
     
  }


  function createUser(){
   
       
      
       $query="INSERT INTO staff(first_name,surname,job_type,tax,date_in,date_out)
                                         VALUES('$this->firstName','$this->lastName','$this->jobs','$this->tax_input','$this->date1','$this->date2')";
      $result=mysqli_query($this->connect(),$query);                                   
         
         

         

       // header("location:create.php");
      print_r( $result);
         return $result;
     
  }
  }

     $firstName=$_POST['names'];
     $lastName=$_POST['surname'];
     $jobs=$_POST['jobs'];
     $tax_input=$_POST['tax_input'];
     $date1=date('Y-m-d',strtotime($_POST['date1']));//here i created a local variable
     $date2=date('Y-m-d',strtotime($_POST['date2']));
     //$date2=$_POST['date2'];


/*
     $firstName="mike";
     $lastName="jomo";
     $jobs="programmer";
     $tax_input=123454356;
     $date1=2019-02-13;
     $date2=2019-02-13;
*/
  $users= new Users($firstName, $lastName,$jobs,$tax_input,$date1,$date2);
   $users->createUser();
   


?>