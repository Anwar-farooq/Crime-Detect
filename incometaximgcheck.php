<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
  $u=$_SESSION['username'];
  ?>
<title>home||Crime detect</title>
	<link rel="stylesheet" type="text/css" href="radmin.css">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="regionalcheck.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
	
</head>

<body>
<div class="header_menu">
    <div class="logo"> 
      <h3>
  <span class="ud_bounce ud_1">C</span>
  <span class="ud_bounce ud_2">R</span>
  <span class="ud_bounce ud_3">I</span>
  <span class="ud_bounce ud_4">M</span>
  <span class="ud_bounce ud_5">E</span>
  <span class="ud_bounce ud_6">D</span>
  <span class="ud_bounce ud_7">E</span>
  <span class="ud_bounce ud_8">T</span>
  <span class="ud_bounce ud_9">E</span>
  <span class="ud_bounce ud_10">C</span>
  <span class="ud_bounce ud_11">T</span>
</h3>
    </div>
    <div class="menu_list">
      <ul>
        <li><a href="regionaladmin.php#home" >home</a></li>
        <li><a href="regionaladmin.php#evidence">Evidence</a> </li>
        <li><a href="regionaladmin.php#count">Evidence count</a></li>
        <li><a href="logout.php">Log Out</a> </li>
      </ul>
    </div>
  </div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)"
  class="closebtn"
  onclick="closeNav()">&times;</a>
  
  <a href="policeimgcheck.php">Police</a>
  <a href="incometaximgcheck.php">Income Tax</a>
  <a href="narcoticsimgcheck.php">Narcotics</a>
  <a href="forestimgcheck.php">Forest</a>

</div>


<span id="opennav" style="font-size:30px;cursor:
pointer"onclick="openNav()">&#9776; CATEGORY
</span>

<script> 

function openNav() {
 document.getElementById("mySidenav")
 .style.width="250px";
}

function closeNav() {
 document.getElementById("mySidenav")
 .style.width = "0";
}
</script>

<center><h1>INCOME TAX</h1></center>
<div class="wrapper">
<?php include("incometaximgcheck1.php")?>
</div>
</body>
</html>