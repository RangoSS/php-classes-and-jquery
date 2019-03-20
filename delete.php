<?php
include_once("dbClass.php");
$db=new db;
if(isset($_GET['id'])){
	$db->deleteUser($_GET['id']);
}
print_r($db);
?>
<script type="text/javascript">location.href='listOfAllUser.php'</script>