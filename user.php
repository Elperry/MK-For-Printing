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
	   	<link rel="stylesheet" href="css/serviceStyle.css">
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
			<?php include('service.php') ?>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 fullwidth">


	<div class="clearfix"></div>
		<div id="contents" class="row  justify-content-md-center">
				<div class="col-3 col-md-4 col-sm-6 col-xs-12"  >
				<div ><img src="img/send.png" width="150px" class="img-responsive center-block"/></div>
				<div class="font-Ti color-si">
بعد ارسال ملفاتك يتم مراجعة طلبك وعرض لك المبلغ المقدر للعملية
		<div class="color-bl" style="display: inline;">
		شاملة الطباعة وتكاليف التوصيل </div>
		ثم يتم التواصل معك عن طريق احد ممثل خدمة العملاء لمراجعة طلبك
			</div>
				</div>
				<div class="col-3 col-md-4 col-sm-6 col-xs-12">
				<div > <img src="img/print.png" width="150px" class="img-responsive center-block"/></div>
				<div class="font-Ti color-si">
تتم طباعة المستند بـ
			<p class="color-bl" style="display: inline;">
			اجود انواع الورق
					</p>
			وعلى حسب اختيارك سواء كان المستند المطلوب طباعته بالألوان او بالأبيض والإسود فقط ويتيح الموقع خدمة تنسيق المستند قبل الطباعة او المراجعة الإملائية .</div>
				</div>
				<div class="col-3 col-md-4 col-sm-6 col-xs-12">
				<div><img src="img/deliver.png" width="150px" class="img-responsive center-block"/></div>
				<div class="font-Ti color-si">
						يتم توصيل المستندات فى المكان المحدد عن طريق الخرطة وتختلف مدة التوصيل من المكان للآخر ويمكن اختيار موعد مسبق كـ مكان عمل او غيره بحد ادنى قبل العملية
						<div class="color-bl" style="display: inline;">
						  بساعتين .
						  </div>
				</div>
				</div>

		</div>
	</div>



<div class="clearfix"></div>
<div id="footer" class="col-lg-12">
		<div class="container">
				<?php
					include 'footer.php';
				 ?>
		 </div>
</div>


        </div>
        </div>
<script>
radiofull();
function radiofull(){
if(document.getElementById('fullDoc').checked) {

document.getElementById('from').disabled=true;
document.getElementById('to').disabled=true;

}else if(document.getElementById('notFull').checked) {

document.getElementById('from').disabled=false;
document.getElementById('to').disabled=false;
}
}

</script>

	<script type="text/javascript">
		$(".radiotxt").fitText(4,1);
    $(".fit4").fitText(.5,5);
		$(".title").fitText(2,.9);
		$(".imgfit").width(40,66);
	</script>

</body>
</html>
