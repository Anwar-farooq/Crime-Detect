<?php 
echo '<html>
<head>
	<title>
	</title>
<style>
/* Lazy Load Styles */
.card-image {
	display: block;
	min-height: 30rem;
	min-width: 20rem; /* layout hack */
	background: #fff center center no-repeat;
	background-size: cover;
	filter: blur(3px); /* blur the lowres image */
}

.card-image > img {
	display: block;
	width: 100%;
	opacity: 0; /* visually hide the img element */
}

.card-image.is-loaded {
	filter: none; /* remove the blur on fullres image */
	transition: filter 1s;
}




/* Layout Styles */
html, body {
	width: 100%;
	height: 100%;
	margin: 0;
	font-size: 16px;
	font-family: sans-serif;
}

.card-list {
	display: block;
	margin: 1rem auto;
	padding: 0;
	font-size: 0;
	text-align: center;
	list-style: none;
}

.card {
	display: inline-block;
	width: 100%;
	max-width: 20rem;
	margin: 1rem;
	font-size: 1rem;
	text-decoration: none;
	overflow: hidden;
	box-shadow: 0 0 3rem -1rem rgba(0,0,0,0.5);
	transition: transform 0.1s ease-in-out, box-shadow 0.1s;
}

.card:hover {
	transform: translateY(-0.5rem) scale(1.0125);
	box-shadow: 0 0.5em 3rem -1rem rgba(0,0,0,0.5);
}

.card-description {
	display: block;
	padding: 1em 0.5em;
	color: #515151;
	text-decoration: none;
}

.card-description > h2 {
	margin: 0 0 0.5em;
}

.card-description > p {
	margin: 0;
}
</style>
</head>
<body>';
$first=$_POST['first'];
$second=$_POST['second'];
$s=mb_substr($second, 0, -4);
$l=$_POST['third'];
$fname=$_POST['filename'];
echo '
<ul class="card-list">
	
	<li class="card">
		<a class="card-image" href="'.$first.'" target="_blank" style="background-image: url('.$first.');" data-image-full="'.$first.'">
			<img src="'.$first.'" alt="original image" />
		</a>
		<a class="card-description" href="'.$first.'" target="_blank">
			<h2>Orginal Image</h2>
		</a>
	</li>
	
	<li class="card">
		<a class="card-image" href="'.$s.'.ela.jpg" target="_blank" style="background-image: url('.$s.'.ela.jpg);" data-image-full="'.$s.'.ela.jpg">
			<img src="'.$s.'.ela.jpg" alt="Perform Algorithm" />
		</a>
		<a class="card-description" href="'.$s.'.ela.jpg" target="_blank">
			<h2>ELA Algorithm</h2>
		</a>
	</li>
	
	<li class="card">
		<a class="card-image" href="'.$l.'/copy'.$fname.'" target="_blank" style="background-image: url('.$l.'/copy'.$fname.');" data-image-full="'.$l.'/copy'.$fname.'">
			<img src="'.$l.'/copy'.$fname.'" alt="Perform Algorithm" />
		</a>
		<a class="card-description" href="'.$l.'/copy'.$fname.'" target="_blank">
			<h2>Copy Move Algorithm</h2>
		</a>
	</li>
	
</ul>
<script type="text/javascript">
	// This is "probably" IE9 compatible but will need some fallbacks for IE8
// - (event listeners, forEach loop)

// wait for the entire page to finish loading
window.addEventListener("load", function() {
	
	// setTimeout to simulate the delay from a real page load
	setTimeout(lazyLoad, 1000);
	
});

function lazyLoad() {
	var card_images = document.querySelectorAll(".card-image");
	
	// loop over each card image
	card_images.forEach(function(card_image) {
		var image_url = card_image.getAttribute("data-image-full");
		var content_image = card_image.querySelector("img");
		
		// change the src of the content image to load the new high res photo
		content_image.src = image_url;
		
		// listen for load event when the new photo is finished loading
		content_image.addEventListener("load", function() {
			// swap out the visible background image with the new fully downloaded photo
			card_image.style.backgroundImage = "url(' ."+ image_url +" .')";
			// add a class to remove the blur filter to smoothly transition the image change
			card_image.className = card_image.className + " is-loaded";
		});
		
	});
	
}


</script>
</body>
<html>';