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
	<h1>Qué hay de nuevo?</h1>

	<div class="slideshow-container">

		<div class="mySlides fade">
			<div class="numberText"> 1/4</div>
			<img src="images//pic1.jpg" style="width: 100%">
			<div class="text">Lo que quiera decir de la PRIMERA actividad aqui.</div>
		</div>

		<div class="mySlides fade">
			<div class="numberText"> 2/4</div>
			<img src="images//pic2.jpg" style="width: 100%">
			<div class="text">Lo que quiera decir de la SEGUNDA actividad aqui.</div>
		</div>

		<div class="mySlides fade">
			<div class="numberText"> 3/4</div>
			<img src="images//pic3.jpg" style="width: 100%">
			<div class="text">Lo que quiera decir de la TERCERA actividad aqui.</div>
		</div>

		<div class="mySlides fade">
			<div class="numberText"> 4/4</div>
			<img src="images//pic4.jpg" style="width: 100%">
			<div class="text">Lo que quiera decir de la CUARTA actividad aqui.</div>
		</div>
	</div>

	<br>

	<div class="bottombar">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

</body>

<script>
	var slideIndex = 0;
	showSlides();

	function showSlides(){
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		
		for(i=0; i<slides.length; i++){
			slides[i].style.display="none";
		}

		slideIndex++;
		if(slideIndex>slides.length)
			slideIndex=1;
		for(i=0; i<dots.length; i++){
			dots[i].className = dots[i].className.replace(" active", "");
		}

		slides[slideIndex-1].style.display= "block";
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides,3000);
	}


</script>