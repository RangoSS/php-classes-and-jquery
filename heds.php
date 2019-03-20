<?php
session_start();
//here we start the session and check if the session is not emty
$username= isset($_SESSION['usernam']) ? $_SESSION['usernam'] : "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employement Monitors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--  icon style -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="style/footStyle.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>

    <style type="text/css">
        .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
 .footer1{
    position: fixed;
    bottom: 0px;
    right: 0;
    left: 0;
    background-color: #b15151; /* Green */
    color: #ffffff;
    text-align: center;
 } 
 a {
    color: #393a3c !important;
    text-decoration: none;
}
    </style>
</head>
<body>

<nav class="navbar bg-1">
  <div class="container ">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                               
      </button>
      <a class="navbar-brand" href="#">Employ monitor</a>

    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="homed.php">Home</a></li>

        <li><a href="#">Contact</a></li>

        <li><a href="about.php">About</a></li>
        <!--here check if session is not emty-->
        <?php if(isset($_SESSION['usernam']) && $_SESSION['usernam'] != "")
        { ?>
           <i class='fas fa-user-tie' style='font-size:20px;margin-top: 10px;'> </i>      
       <li><a name="sissioning" href="logout.php"><b><u>Logout <?php echo  $username; ?></u></b></a></li>
        
     <?php } else { ?>
        <li><a href="login.php">Login</a></li>
           <?php } ?>
   


        


       
      </ul>
    </div>
  </div>
</nav>


<?php



?>