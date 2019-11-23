<!DOCTYPE html>
<html>
<head>
	<title>HCD la radio de Ciudad Delgado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

 </head>

<body>

	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>

			<ul id="menu"> 
				<li class="menubutton"> <a class="active" href="galeria.php"> GALERIA</a></li>
				<li class="menubutton"> <a href="historias.php">HISTORIAS</a></li>
				<li class="menubutton"> <a href="historias.php">HCD RADIO</a></li>
				<li class="menubutton"> <a href="historias.php">VIDEOS</a></li>
				<li class="menubutton"> <a href="historias.php">CHAT EN LINEA</a></li>
				<li class="menubutton"> <a href="historias.php">CONTACTOS</a></li>
				<li><img id="corner-image" src="images/adiel.jpg"></li>
			</ul>


			
			
	


	<div class="big-container">

		
		<!--start of images slideshow-->
		<div class="slideshow-container">
			<h1>Qué hay de nuevo?</h1>
			<div class="mySlides fade">
				<img class="photos" src="images//pic1.jpg">
				<div class="text">Enterate de todo acerca de la carreta chillona.</div>
			</div>

			<div class="mySlides fade">
				<img class="photos"  src="images//pic2.jpg">
				<div class="text">Lo que quiera decir de la SEGUNDA actividad aqui.</div>
			</div>

			<div class="mySlides fade">
				<img class="photos"  src="images//pic3.jpg">
				<div class="text">Lo que quiera decir de la TERCERA actividad aqui.</div>
			</div>

			<div class="mySlides fade">
				<img class="photos"  src="images//pic4.jpg">
				<div class="text">Lo que quiera decir de la CUARTA actividad aqui.</div>
			</div>

		</div> <!--end of images slideshow-->

		
		<div class="right-container"><!--start of right side container-->
			<h1>Radio en linea</h1>
		
			<ul class="social-icons">
				<li>
					<img id="radio" src="images\radio.jpg"/>
					<audio src="https://node-29.zeno.fm/3hb6s1gew5quv?fbclid=IwAR3Ay6utWOVyGJ_AJzpIDXQW5o7BrpFXcKpN-wPL5wJP6A_ckZaVbAjgZZw&rj-tok=AAABboku7tMAX4W2if_fO2ch2w&rj-ttl=5:8000/;listen.pls?sid=1" autoplay="true" controls="true" volume="1.0">						  	
					</audio>
				</li>
			    <li>
			    	<h1>Siguenos en Facebook:</h1>
			    	<div class="fb-page" data-href="https://www.facebook.com/historiasdeciudaddelgado" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
			    </li>

			    <li>
			    	<h1>Otras redes sociales:</h1>
			    	<a href="http://www.twitter.com">Youtube <img  src='media\Social Media Icons\PNG\Circle Color\YouTube.png' /></a>
			    </li>
			    <li>
			    	<a href="http://www.youtube.com">Instagram <img class="socialText" src='media\Social Media Icons\PNG\Circle Color\Instagram.png' /></a>
			    </li>
			</ul>

		</div> <!--end of right side container-->
		
			<div class="bottombar">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
	</div>
	<br>

	

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
		setTimeout(showSlides,5000);
	}


</script>