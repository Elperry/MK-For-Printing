<html>
 <head>
  <title>MK</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   	  	<link rel="stylesheet" href="css/font-awesome.min.css">
   	  	<link rel="stylesheet" href="css/bootstrap.css">
   	  	<link rel="stylesheet" href="css/bootstrapar.css">
   	    <link rel="stylesheet" href="css/socialBtns.css">
	   	<link rel="stylesheet" href="css/style.css" />
	   	<link rel="stylesheet" href="css/formstyle.css">
	   	<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	   	<script src="js/html5shiv.min.js"></script>
	   	<script src="js/respond.min.js"></script>
	   	<script src="js/jquery.fittext.js"></script>
		

		
	</head>
<body>

<div class="container-fluid">
<div id="main" class="row-fluid fullwidth">
<div class="col-lg-12 fullwidth" >
<div class="fullwidth">
	<?php include 'header.php';	 ?></div>
</div>
<div class="clearfix"></div>
<div id="hder" class="col-lg-12">
 <div class="row fullwidth center" >
			<?php include('form.php') ?>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 fullwidth">
	<?php 
			include('slides.php');
	?>
</div>


<div id="footer" class="col-lg-12">
		<div class="container">
				<?php
					include 'footer.php';
				 ?>
		 </div>
</div>
      
        
        </div>
        </div>	
       
	
	<script type="text/javascript">
		$("#fit3").fitText(1.5,0.9);
		$("#fittext3").fitText(0.23,0.09);
		$(".fittext").fitText(0.8,0.4);
	</script>
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
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
