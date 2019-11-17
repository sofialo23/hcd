<!DOCTYPE html>
<html>
<head>
	<title>HCD la radio de Ciudad Delgado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<ul id="menu"> 
		<li class="menubutton"> <a class="active" href="galeria.php"> GALERIA</a></li>
		<li class="menubutton"> <a href="historias.php">HISTORIAS</a></li>
		<li class="menubutton"> <a href="historias.php">HCD RADIO</a></li>
		<li class="menubutton"> <a href="historias.php">VIDEOS</a></li>
		<li class="menubutton"> <a href="historias.php">CHAT EN LINEA</a></li>
		<li class="menubutton"> <a href="historias.php">CONTACTOS</a></li>
	</ul>

	<!-- Container for the image gallery -->
	<div class="container"> 

		<!-- Full-width images with number text -->
		<div class="mySlides">
    		<div class="numbertext">1/6</div>
      		<img class="imag" src="images/pic1.jpg">
  		</div>

	  	<div class="mySlides">
	    	<div class="numbertext">2/6</div>
	      	<img src="images/pic2.jpg" class="imag">
	  	</div>

	  	<div class="mySlides">
	    	<div class="numbertext">3/6</div>
	     	<img src="images/pic3.jpg" class="imag">
	  	</div>

	  	<div class="mySlides">
    		<div class="numbertext">4/6</div>
      		<img src="images/pic4.jpg" class="imag">
  		</div>

	  	<div class="mySlides">
	    	<div class="numbertext">5/6</div>
	      	<img src="images/pic5.jpg" class="imag">
	  	</div>

	  	<div class="mySlides">
	    	<div class="numbertext">6/6</div>
	     	<img src="images/pic6.jpg" class="imag">
	  	</div>

	  	<!-- Next and previous buttons -->
	  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  	<a class="next" onclick="plusSlides(1)">&#10095;</a>

	  	<!-- Image text -->
		<div class="caption-container">
		   <p id="caption"></p>
		</div>

		  <!-- Thumbnail images -->
  		<div class="row">
    		<div class="column">
      			<img class="demo cursor" src="images/pic1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    		</div>
		    <div class="column">
		      <img class="demo cursor" src="images/pic2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/pic3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/pic4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/pic5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/pic6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
		    </div>
	  	</div>
</div>
	</div>
</body>
</html>

<script>
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 

</script>