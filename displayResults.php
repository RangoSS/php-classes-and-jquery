

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--icons-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script type="text/javascript" src="script/scripting.js"></script>
<script type="text/javascript" src="script/numericInput.min.js"></script> <!--library for nummeric values-->

</head>
<body>
	<!--class intances-->
	<?php include "heds.php";?>
	<?php include "dbClass.php";

	    $db =new db;  //here i instanced the class so that i can use its functions
	    $result=$db->getRecods();
	    ?>
	   
	<div id="container" style="width:80%;height:200px;border-bottom:1px;">
		<div id="jumbo" style="margin-left: 500px">
			<h1>medicine Stock<small>pr</small></h1>
		</div>
	</div>

	<div id="display" style="margin-left: 500px;">enter medicine details</div>
	<div id="infos">
		<h1>crud info</h1>
		<form metod="post" action="result.php" style="margin-left: 500px;">
		  <input type="butthon" class="btn btn-info" value="Add user" onclick="create1()"/>
		  <input type="submit" class="btn btn-info" value="search" name="submit" method="post" style="margin-right: 100px"/>

		</form>
		  
		  <table class="table"style="width:70%;margin-left: 30px;">	
		  
		  	
		<tr class="success">
		  	<th>names</th>
		  	<th>surname</th>
		  	<th>username</th>
		  	<th>password</th>
		  	<th>jobs</th>
	 </tr>
		 
	
           
		 <?php while($row=mysqli_fetch_array($result)){
           
		 	echo "
		 	<tr>
		 	    <td>  $row[first_name]</td>
		 	   <td>   $row[surname] </td>
		 	   <td> $row[username] </td>
		 	    <td> $row[user_password] </td>
		 	    <td> $row[job_type] </td>
		 	    </tr>";
		 	    
		 	
		 } 

		 ?>
		 
		
		
		</table>
	
		  	
	<!--td>  <input type='button' value='view' onclick='view1($id)'></td>;
		 	<td> <input type='button' value='update' onclick='update1($id)'></td>";	 --> 
		
	</div>

	<script type="text/javascript">
		function create1(){
          location.href="create.php";
		}
	</script>

</body>
</html>
 

	