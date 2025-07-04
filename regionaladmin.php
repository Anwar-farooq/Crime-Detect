
<?php
session_start();
            $username=$_SESSION['username'];
echo '<!DOCTYPE html>
<html>
<head>
	<title>R - CRIMEDETECT</title>
	<link rel="stylesheet" type="text/css" href="regionalstyle.css">
	<link rel="stylesheet" type="text/css" href="loadstyle.css">
    <script type="text/javascript" src="jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<style type="text/css">
 
.logo h3 {
font-family: "dosis", sans-serif;
  position: relative;
  top: -10px;
  left: 35px;
}
        h1{
            text-align: center;
            justify-content: center;
            align-content: center;
            padding: 25px;
            
        }
#evidence {
	position: relative;
	padding:  90px 0 20px 0;
}
#evidence{

}
.logo h3 span {
  position: relative;
}


.ud_1 {
  -webkit-animation: bounce1 3s ease-in-out infinite running;
}
.ud_2 {
  -webkit-animation: bounce2 3s ease-in-out infinite running;
}
.ud_3 {
  -webkit-animation: bounce3 3s ease-in-out infinite running;
}
.ud_4 {
  -webkit-animation: bounce4 3s ease-in-out infinite running;
}
.ud_5 {
  -webkit-animation: bounce5 3s ease-in-out infinite running;
}
.ud_6 {
  -webkit-animation: bounce6 3s ease-in-out infinite running;
}
.ud_7 {
  -webkit-animation: bounce7 3s ease-in-out infinite running;
}
.ud_8 {
  -webkit-animation: bounce8 3s ease-in-out infinite running;
}
.ud_9 {
  -webkit-animation: bounce9 3s ease-in-out infinite running;
}
.ud_10 {
  -webkit-animation: bounce10 3s ease-in-out infinite running;
}
.ud_11 {
  -webkit-animation: bounce11 3s ease-in-out infinite running;
}


@-webkit-keyframes bounce1 {
  0% {
    bottom: 0;
  }
  5% {
    bottom: 15px;
  }
  10% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce2 {
  5% {
    bottom: 0;
  }
  10% {
    bottom: 15px;
  }
  15% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce3 {
  10% {
    bottom: 0;
  }
  15% {
    bottom: 15px;
  }
  20% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce4 {
  15% {
    bottom: 0;
  }
  20% {
    bottom: 15px;
  }
  25% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce5 {
  20% {
    bottom: 0;
  }
  25% {
    bottom: 15px;
  }
  30% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce6 {
  25% {
    bottom: 0;
  }
  30% {
    bottom: 15px;
  }
  35% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce7 {
  30% {
    bottom: 0;
  }
  35% {
    bottom: 15px;
  }
  40% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce8 {
  35% {
    bottom: 0;
  }
  40% {
    bottom: 15px;
  }
  45% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce9 {
  40% {
    bottom: 0;
  }
  45% {
    bottom: 15px;
  }
  50% {
    bottom: 0;
  }
}

@-webkit-keyframes bounce10 {
  45% {
    bottom: 0;
  }
  50% {
    bottom: 15px;
  }
  55% {
    bottom: 0;
  }
}
@-webkit-keyframes bounce11 {
  50% {
    bottom: 0;
  }
  55% {
    bottom: 15px;
  }
  60% {
    bottom: 0;
  }
}
        
        
        
        /*  number */
        
.col_half { width: 49%; }
.col_third { width: 32%; }
.col_fourth { width: 23.5%; }
.col_fifth { width: 18.4%; }
.col_sixth { width: 15%; }
.col_three_fourth { width: 74.5%;}
.col_twothird{ width: 66%;}
.col_half,
.col_third,
.col_twothird,
.col_fourth,
.col_three_fourth,
.col_fifth{
	position: relative;
	display:inline;
	display: inline-block;
	float: left;
	margin-right: 2%;
	margin-bottom: 20px;
}
.end { margin-right: 0 !important; }
/* Column Grids End */

.wrapper { width: 980px; margin: 30px auto; position: relative;}
.counter { background-color: rgb(245, 122, 33); padding: 20px 0; border-radius: 5px;}
.count-title { font-size: 40px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.count-text { font-size: 13px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.fa-2x { margin: 0 auto; float: none; display: table; color: #4ad1e5; }

        #count{
            padding-top: 60px;
            
        }

	</style>
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
				<li><a href="#home" >home</a></li>
				<li><a href="#evidence">Evidence</a> </li>
				<li><a href="#count">Evidence count</a></li>
				<li><a href="logout.php">Log Out</a> </li>
			</ul>
		</div>
	</div>
	<header>
<section id="home" class="box">
	<div class="header_content">
		<h2>POLICE / FOREST / INCOME TAX / NARCOTICS</h2>
		<h1>CRIMEDETECT</h1>
		<button><a href="#evidence">
			EVIDENCE
		</a></button>

		<button><a href="#count">
			COUNT
		</a></button>
	</div>
</header>
</section>
<section id="evidence" class="box">
	<center>
<font color="white"><h2><u>CHECK MEDIA</u></h2></font>
<br></center>
<div class="buttons">
  <button id="imageu" class="blob-btn">
    IMAGE
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
<div class="buttons">
  <button id="videou" class="blob-btn">
    VIDEO
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
  <br/>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>
<script type="text/javascript">
    document.getElementById("imageu").onclick = function () {
        location.href = "policeimgcheck.php";
		};
	document.getElementById("videou").onclick = function () {
        location.href = "policevidcheck.php";	
    };
</script>
</section>
<section id="count" class="box">';
            
            $conn1 = mysqli_connect("localhost","root","","crimedetect");
            $sql1="select count(*) from imgpolice where district ='".$username."';";
			$m1=mysqli_query($conn1,$sql1);
            $row1= mysqli_fetch_array($m1);
            $p=$row1[0];
            $conn2 = mysqli_connect("localhost","root","","crimedetect");               
            $sql2="select count(*) from imgincometax where district ='".$username."';";
			$m2=mysqli_query($conn2,$sql2);
            $row2= mysqli_fetch_array($m2);
            $i=$row2[0];
            $conn3 = mysqli_connect("localhost","root","","crimedetect");
            $sql3="select count(*) from imgforest where district ='".$username."';";
			$m3=mysqli_query($conn3,$sql3);
            $row3= mysqli_fetch_array($m3);
            $f=$row3[0];
            $conn4 = mysqli_connect("localhost","root","","crimedetect");
            $sql4="select count(*) from imgnarcotics where district ='".$username."';";
			$m4=mysqli_query($conn4,$sql4);
            $row4= mysqli_fetch_array($m4);
            $n=$row4["count(*)"];
            $conn5 = mysqli_connect("localhost","root","","crimedetect");
            $sql5="select count(*) from vidpolice where district ='".$username."';";
			$m5=mysqli_query($conn5,$sql5);
            $row5= mysqli_fetch_array($m5);
            $pv=$row5["count(*)"];
            $conn6 = mysqli_connect("localhost","root","","crimedetect");
            $sql6="select count(*) from vidincometax where district ='".$username."';";
			$m6=mysqli_query($conn6,$sql6);
            $row6= mysqli_fetch_array($m6);
            $iv=$row6["count(*)"];
            $conn7 = mysqli_connect("localhost","root","","crimedetect");
            $sql7="select count(*) from vidforest where district ='".$username."';";
			$m7=mysqli_query($conn7,$sql7);
            $row7= mysqli_fetch_array($m7);
            $fv=$row7["count(*)"];
            $conn8 = mysqli_connect("localhost","root","","crimedetect");
            $sql8="select count(*) from vidnarcotics where district ='".$username."';";
			$m8=mysqli_query($conn8,$sql8);
            $row8= mysqli_fetch_array($m8);
            $nv=$row8["count(*)"];


    echo '
	<h1>COUNT</h1>
	<h1>Number of image uploads in '.$username.'</h1>
    <div class="wrapper">
    <div class="counter col_fourth">
      <h2 class="timer count-title count-number" data-to="'.$p.'" data-speed="1500"></h2>
       <p class="count-text ">POLICE</p>
    </div>

    <div class="counter col_fourth">
      <h2 class="timer count-title count-number" data-to="'.$i.'" data-speed="1500"></h2>
      <p class="count-text ">INCOME TAX</p>
    </div>

    <div class="counter col_fourth">
      <h2 class="timer count-title count-number" data-to="'.$f.'" data-speed="1500"></h2>
      <p class="count-text ">FOREST</p>
    </div>

    <div class="counter col_fourth end">
      <h2 class="timer count-title count-number" data-to="'.$n.'" data-speed="1500"></h2>
      <p class="count-text ">NARCOTICS</p>
    </div>
</div>
    <br><br><br><br><br><br><br>
    <h1>Number of video uploads in '.$username.'</h1>
    <div class="wrapper">
    <div class="counter col_fourth">
      <h2 class="timer count-title count-number" data-to="'.$pv.'" data-speed="1500"></h2>
       <p class="count-text ">POLICE</p>
    </div>

    <div class="counter col_fourth">
      <h2 class="timer count-title count-number" data-to="'.$iv.'" data-speed="1500"></h2>
      <p class="count-text ">INCOME TAX</p>
    </div>

    <div class="counter col_fourth">
      <h2 class="timer count-title count-number" data-to="'.$fv.'" data-speed="1500"></h2>
      <p class="count-text ">FOREST</p>
    </div>

    <div class="counter col_fourth end">
      <h2 class="timer count-title count-number" data-to="'.$nv.'" data-speed="1500"></h2>
      <p class="count-text ">NARCOTICS</p>
    </div>
</div>
    <script>
        
    $(document).scroll(function(){
       
        
        
        (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data("from"),
				to:              $(this).data("to"),
				speed:           $(this).data("speed"),
				refreshInterval: $(this).data("refresh-interval"),
				decimals:        $(this).data("decimals"),
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data("countTo") || {};
			
			$self.data("countTo", data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == "function") {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData("countTo");
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == "function") {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $(".count-number").data("countToOptions", {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
	}
  });
  
  // start all the timers
  $(".timer").each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data("countToOptions") || {});
	$this.countTo(options);
  }
});
        
    });
    
    </script>
</section>
   <script>
    
        var preloader1=document.getElementById("preloader");
        
        function myfunction(){
            preloader1.style.display="none";
        }
    </script>

</body>
</html>';