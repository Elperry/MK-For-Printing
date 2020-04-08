<html>
<head>

<style>
* {box-sizing:border-box}
.mySlides {
	width: 100%;
	display:none}

/* Slideshow container */
.slideshow-container {
  width: 100%;
	margin-top: 20px;
	margin-bottom: 20px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
		#cn{
			position: relative;
		vertical-align: middle;

	}
	#d{
		margin: auto;
		position:absolute;
		  top: 50%;
  right: 0px;
		transform: translate(-50%, -50%);
  -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1, M12=0, M21=0, M22=1, SizingMethod='auto expand')";
		
	}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: block;
	margin: 15px;
	clear: both;
  transition: background-color 1.9s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/slider.gif" style="width:100%">
 </div>

<div class="mySlides fade">
  <img src="img/slider.gif" style="width:100%">
  </div>

<div class="mySlides fade">
  <img src="img/slider.gif" style="width:100%">
 </div>
<div id="d">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>


</body>
</html> 
