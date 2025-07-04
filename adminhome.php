
<!DOCTYPE html>
<html>
<head>
	<title>CRIME DETECT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="uploadstyle.css">
    <link rel="stylesheet" type="text/css" href="loadstyle.css">
    <link rel="stylesheet" type="text/css" href="adminlogpop.css">
	<link rel="stylesheet" href="adminhome.css">
	<link rel="stylesheet" href="adminanimate.css">
</head>
<body onload="myfunction()">
<div id='preloader'>
<div class="loader">
	<div class="loader-inner">
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
	</div>
</div>
</div>
	<div class="wrapper">
	  <div class="sidebar">
	      <ul>
	        <li><a href="#home">
			 <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
			  </a></li>
			  <li><a href="#viewuser">
	          <span class="icon"><i class="fa fa-users" aria-hidden="true"></i>
			  </a></li>
	        <li><a href="#adduser">
	          <span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
	          </a></li>
	        <li><a href="#removeuser">
	          <span class="icon"><i class="fa fa-user-times" aria-hidden="true"></i></span>
	          </a></li>
	        
	    </ul>
	  </div>

	<!-- home section start -->
    <section class="home box1" id="home">
    <div class>
      <div class="container pdlft">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center">
            <div class="contents">
                 <h5 class="hme-cntnt wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">Hi</h5>
                 <h2 class="hme-name wow bounceIn" data-wow-delay=".7s" data-wow-duration="1s">CRIME DETECT</h2>
                 <p class="hme-cntnt wow fadeIn" data-wow-delay="1.1s" data-wow-duration="1s">Law Enforcement Web-App</p>
                 <br>
                 <a href="#viewuser" class="btn-abt wow fadeIn" data-wow-delay="1.7s" data-wow-duration="1.5s">VIEW ADMINS</a>
				   <div class="socialmedia">
				   	<a href="https://www.linkedin.com/in/Crimedetect" target="_blank"> <button class="wow zoomIn" data-wow-delay="2.7s" data-wow-duration=".7s"><i class="fa fa-linkedin" aria-hidden="true"></button></i> </a>
				    <a href="https://github.com/Crimedetect" target="_blank"> <button class="wow zoomIn" data-wow-delay="3.0s" data-wow-duration=".7s"><i class="fa fa-github" aria-hidden="true"></button></i> </a>
				    <a href="https://www.instagram.com/Crimedetect" target="_blank"> <button class="wow zoomIn" data-wow-delay="3.3s" data-wow-duration=".7s"><i class="fa fa-instagram" aria-hidden="true"></button></i> </a>
				   	<a href="https://www.facebook.com/Crimedetect" target="_blank"> <button class="wow zoomIn" data-wow-delay="3.6s" data-wow-duration=".7s"><i class="fa fa-facebook" aria-hidden="true"></button></i> </a>
				   </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- home section end -->
	<!-- about section start -->
	<section id="viewuser" class="about box">

  
       <div class="buttons">
              <button id="view" class="blob-btn" onclick="document.getElementById('id04').style.display='block'">
      View Admins
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>
    
     <div id="id04" class="modal0"> 
       <!--<img src="logicon.jpg" alt="user" class="avatar">-->
 <form  class="modal-content" method="" action="">
  <div class="imgcontain"> 
                <span onclick="document.getElementById('id04').style.display='none'" class="closev" title="Close Modal">×</span> 
            </div>
  <font color="#09b2b7">
    <ol type="1" class="page-menu">
      <?php
         $conn = mysqli_connect("localhost","root","","crimedetect");
         $sql="select * from log where category='0'";
         $m=mysqli_query($conn,$sql);
      ?>
      <center>
      <table>
        <tr>
          <th>
            <h2>
              <u>
              Username
            </u>
          </h2>
        </th>
      </tr>      
      <?php
        while($row= mysqli_fetch_array($m)){
      ?>
      <tr>
      <td>
        <h3>
          
           <li><?php echo $row['usr']; ?></li>
          
        </h3>
      </td>
      </tr>
      <?php
      }
      ?>
    </table>
    </center>
    </div>
  </ol>
    </font>
    </form>
</div>
<script>
   var modal = document.getElementById('id04'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
</script>
		</section>
		<!-- view user section end -->

		<!-- adduser section Start-->
		<section id="adduser" class="about box">
      <div>


      <div id="id01" class="modal1"> <!--<img src="logicon.jpg" alt="user" class="avatar">-->
    <div id="logo"> 
  <h1><i> ADD USER</i></h1>
</div> 
<section class="stark-login">
    <button class="close" onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&#10060;</button>
   <form method="POST" action="adminadd.php">
  
    <div id="fade-box">
     <input type="text" placeholder="Username" name="usrm" required>
        <input type="password" placeholder="Password" name="pswd" required>
    <input class="button" type="submit" value="ADD USER">
           
        </div>
      </form>
         
            </section> 
            
            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>
            
	</div>
	<script> 
        var modal = document.getElementById('id01'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
    </script> 


      <div class="container">
        	<div class="buttons">
          		<button id="add" class="blob-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
    	Add Admin
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>
		</section>
		<!-- Resume section end -->
		
		<!-- Contact Section Start -->
		<section id="removeuser" class="about box">
      <div>


      <div id="id02" class="modal1"> <!--<img src="logicon.jpg" alt="user" class="avatar">-->
     <div id="logo"> 
  <h1><i> REMOVE ADMIN</i></h1>
</div> 
<section class="stark-login">
    <button class="close" onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&#10060;</button>
   <form method="POST" action="admdelete.php">
  
    <div id="fade-box">
     <input type="text" placeholder="Username" name="dusrm" required>
    <input class="button" type="submit" value="REMOVE ADMIN">
           
        </div>
      </form>
         
            </section> 
            
            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>
	</div>
	<script> 
        var modal = document.getElementById('id02'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
    </script> 


      <div class="container">
        	<div class="buttons">
          		<button id="add" class="blob-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
    	Remove Admin
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>
		</section>
		  <!-- Contact Section End -->

		<footer class="footer text-center box1">
			<div class="madeby">
				<p>All Rights Reserved © 2020 Crimedetect Team</p>
  		</div>
		</footer>
	</div>
		<script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
 <script>
    
        var preloader1=document.getElementById('preloader');
        
        function myfunction(){
            preloader1.style.display='none';
        }
    </script>
</body>
</html>
