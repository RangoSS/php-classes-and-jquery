
<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<?php include "heds.php";?>
	</html><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="script/pagingTable.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.table-responsive {height:180px;}
</style>
</head>
<body>

  <?php include "dbClass.php";

      $db =new db;  //here i instanced the class so that i can use its functions
      $resulting=$db->getRecods();//function for displaying data
      $db->deleteUser();

      //$deleting=$db->deleteUser();
      print_r($db);
      ?>

     <div class="container">
      <h4>Selecte Number of Rows</h4>
      <div class="form-group">
       <select name="state" id="maxRows" class="form-control" style="width:150px;">
        <option value="5000">Sow All</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
      </select>
      </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>

              <th>names</th>
              <th>surname</th>
              <th>username</th>
              <th>password</th>
              <th>jobs</th>
              <th colspan="2">Action</th>
              
            </tr>
          </thead>
          <tbody id='myTable'>


             <?php while($row=mysqli_fetch_array($resulting)){
           
      echo "
      <tr>
          <td>  $row[first_name]</td>
         <td>   $row[surname] </td>
         <td> $row[username] </td>
          <td> $row[user_password] </td>
          <td> $row[job_type] </td>
          <td><input class='btn btn-success' type='submit' name='update' value='update'/>
           <a href='listOfAllUser.php?myid=$row[staff_id]' onclick='del(id)'>Delete</a></td>  
          
          </tr>";
     } 
     ?>
         
          </tbody>
        </table>   
      </div>
      <div class="pagination-container">
        <nav>
      <ul class="pagination"></ul>
      </nav>
      </div>
	</div>
</div>

</body>
<div>
	<?Php include "footers.php";?>
</div>

<script type="text/javascript">
  function del(id){
    if(confirm("are you sure you want to delete")){
      location:href='listOfAllUser.php?id='+id;
    }
  }
</script>
</body>
</html>
