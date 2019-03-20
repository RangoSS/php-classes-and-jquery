<?php include "heds.php";?>

<style type="text/css">
	.mogo{width: 250px;}
	.mogo2{width:200px;}
</style>


<?php
 include "loginInsert.php";

     $data=new leave();
     $result=$data->insertData();

     if(isset($_POST['applying'])){
     $data->createLeave();
     }
?>

	 <input type="submit" class="btn btn-success" id="sliding" value="Apply"  />
    <div id="bodyContainer" style="border-style: solid;width:70%;margin-left: 15%;height:auto;display: none;">

    

	<!--end of tabs-->
	<div id="titile"style="margin-left: 25%;">
	<h1><strong>Apply Here</strong></h1>
	
</div>
 <div id="form-container"  style="margin-left: 10%;height: 60%;">
 	<form action="" method="post">
        <!--these are my hidden--inputs-->
        <div>
            <input class="form-control mogo2" type="hidden" id="staff_id" name="staff_id"/>
        </div>
       
 		<div><label class="control-label col-sm-2">leave for</label>

 			<input class="form-control mogo2" type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $username;?>"/>
 			
 		</div>

 		<div><label class="control-label col-sm-2">applying </label>
 			 <select class="form-control mogo2" id="myops" name="myops">
 				<option value="">--select--</option>
 				<option value="12">sick</option>
 				<option value="13">study</option>
 			</select>
 		</div>


        <div><label class="control-label col-sm-2"> from</label>
 			<input  class="form-control mogo2" type="date" id="dateFrom" name="dateFrom" />
 			
 		</div>
 		<div><label class="control-label col-sm-2"> to</label>
 			<input class="form-control mogo2" type="date" id="date_to" name="date_to" />
 		</div>
 		 <div><label class="control-label col-sm-2">reason</label>
 			<input  class="form-control mogo2" type="text" id="reason" name="reason" />
 		</div><br>
         <div><label class="control-label col-sm-2">comments</label>
         	<textarea rows="4" cols="50">

         	</textarea>
         </div>
 		
 		<div>
 			<input type="submit" class="btn btn-success" name="applying" id="applying" value="Apply" style="width:40%" />
 			
 		</div>
 	</form>
 </div>
 
</div>

<div id="displayHere" style="border-style: solid;width:70%;margin-left: 15%;height:auto; ">

     <table class="table table-dark" style="width:70%;margin-left: 30px;">  
          
            
        <tr class="success">
            <th>First Name</th>
            <th>From</th>
            <th>To </th>
            <th>Leave Type</th>
            <th>Reason </th>
     </tr>

    <?php 
         //down here i fetch is calling insert function
     while($row=mysqli_fetch_assoc($result)){

       
      echo "
            <tr>
                <td>  $row[first_name]</td>
               <td>   $row[date_from] </td>
               <td> $row[date_to] </td>
                <td> $row[leave_type] </td>
                <td> $row[comments] </td>
                </tr>";
                

     }
         
          
    ?>
</table>
    
</div>


<script>
 $(document).ready(function(){
          $("#sliding").click(function(event){
            event.preventDefault();
               $("#bodyContainer").slideToggle(5000);
          });
    });
</script>
<?php include 'footers.php'; ?>
