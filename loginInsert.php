
<?php
include "dbClass.php";

class leave extends db{

function insertData(){

	$sql=" SELECT first_name,date_from,date_to,leave_type,comments from leaveapplication l
           JOIN staff s
           ON l.leave_id=s.staff_id
           JOIN leave_category c 
           ON l.leave_id=c.leaveCat_id";
	         $result=mysqli_query($this->connect(),$sql);
      // print_r($result);
      // echo"i am here";
      
     
	 return $result;
}
   function createLeave(){

       $date1=date('Y-m-d',strtotime($_POST['dateFrom']));//here i created a local variable
       $date2=date('Y-m-d',strtotime($_POST['date_to']));
       $options=$_POST['myops'];
       $staff_id=$_POST['staff_id'];
       $comments=$_POST['reason'];
       
	   //working script
       $query="INSERT INTO leaveapplication(date_from,date_to,leaveCat_id,staff_id,comments)
                          VALUES('$date1','$date2','$options','$staff_id','$comments')";

      /* $query="INSERT INTO leaveapplication(date_fom,date_to,leaveCat_id,staff_id,comments)
                          VALUES('$date1','$date2','$options','$staff_id','$comments')";*/
      $result=mysqli_query($this->connect(),$query);

       return $result;
      }

}

?>