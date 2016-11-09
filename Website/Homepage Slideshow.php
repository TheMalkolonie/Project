<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,  initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow Positie */
.slideshow-container {
  max-width: 100%;
  position: center;
  margin: left;
}

/* Eventuele tekst om toe te voegen */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



/* De bolletjes */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animatie */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;  
}

@-webkit-keyframes fade {
  from {opacity: .0}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .5}
  to {opacity: 1}
}

</style>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/Pizza Plaatje.jpg" style="width:100%;height:100%;" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="images/Dessert Plaatje.jpg" style="width:100%;height:100%;">
  <div class="text"></div>
</div>

<div class="mySlides fade"> 
  <img src="images/Drinks.jpg" style="width:100%;height:100%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="images/snacks.jpg" style="width:100%;height:50%;">
  <div class="text"></div>
</div>

</div>
<br>


<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Veranderd het plaatje elke 5 seconden
}
</script>

</body>
</html>
