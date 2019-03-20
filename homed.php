<!DOCTYPE html>
<html>
<head>
<title>Homes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.mySlides {display:none;}
.link{background-color:blue;}
</style>
<?php include "heds.php";?> 
</head>
<body>

<div id="galleary" style="height:450px;width:200px;border-style: solid;border-width: 5px;width: 50%;margin-left: 250px;margin-bottom: 10px;">


<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/cust2.jpg" style="width:80%">
  <img class="mySlides" src="images/cust4.jpg" style="width:80%">
  <img class="mySlides" src="images/cust3.jpg" style="width:80%">
  <img class="mySlides" src="images/cust2.jpg" style="width:80%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" >&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

</div>

<!--now go my sagege tab-->
<div id="sage" style="border-style:solid;width:20%;border-width: 5px;margin-left: 70%;margin-top:-26%;height:400px; box-shadow: 5px 10px #888888; ">

  <h1>We helps peopple like <small>you</small></h1>
  <p style="padding:10px;">
   As business gets more complicated by technology, it’s often the simple things that can make customers feel great. Give customers your full attention by taking eyes and ears off all the distractions around you when they talk. All to often, employees type email or answer ringing lines while a customer is with them.

Leaders need to set the example here, putting aside distractions when they communicate with employees.
  </p>
  <input type="button" class="w3-circle link" href="applyLeave.php" value="Apply Leave"/>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>




<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
<br><br>
<div >
  <div>
  <?Php include "footers.php";?>
</div>
  </div>
</html>
