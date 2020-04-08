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
<div class="row fullwidth">
	<?php include 'header.php';	 ?></div>
</div>


<div class="row-fluid fullwidth">
	<div class="col-md-4 col-sm-4 col-xs-4 "></div>
		<div class="col-md-2 col-sm-2 col-xs-2 pad-0"style="padding-top:20px;">
		<img  src="img/uploadimg.png" width="50" height="50" class=" img-responsive left"></div>
		<div id="cptitle"class="col-md-3 col-sm-3 col-xs-3 float-right pad-0"><h1 style="float:right;"> &nbsp; رفع المستندات </h1></div>
		<div class="col-md-3 col-sm-4 col-xs-4 "></div>
		<div class="clearfix"></div>
  </div>
<div class="row fullwidth" style="border:1px solid black;">

</div>

<form id="mainform" enctype="multipart/form-data" class=" " method="post" action="#">
<div id="title" class="col-lg-12   pad-0 fullwidth" style="margin-top:-20px;">

</div>
<div class="row">

  <div class="col-lg-4">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div  style="text-align:right;display:table;font-size:20pt; border-bottom:2px solid #c1cd5f;">
         <img src="img/visa.png" class="img-responsive" style="max-width:50px; display:inline;"> طريقة الدفع :
      </div>
    </div>
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
       <div class="rad">
        <input type="radio" value="yes" name="cashNow" autocomplete="off">
        <img src="img/paypal.png" width="40px" height="40px" class="imgfit" />
         مباشرة
        </div>
      </div>

     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
       <div class="rad">
        <input type="radio" value="No" name="cashNow" autocomplete="off">
        <img src="img/Money.png" width="40px" height="40px" class="imgfit" />
          عند الإستلام
        </div>

     </div>
     <div class="col-lg-11"style="border-bottom:2px solid #00d2d4;margin-top:40px; ">    </div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div  style="text-align:right;display:table;font-size:20pt; border-bottom:2px solid #c1cd5f;">
          <img src="img/visa.png" class="img-responsive" style="max-width:50px; display:inline;"> موعد التسليم :
       </div>
     </div>
     <div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row " >
              <div class='input-group date 'style="margin-top:15px; border-raduis:7px;">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                  <input type='date' class="form-control" style="direction:rtl;"  required/>
              </div>
              <h2 style="color:red;">
                يجب تحديد التاريخ و الساعة بحد أدنى قبل العملية بساعتين
              </h2>

    </div>
</div>

    </div>

  </div>



  <div class="col-lg-8" style="background:#f9f8fd;">
    <?php include('upfile.php'); ?>
  </div>
</div>

<div class="row">
  <?php include('map.php'); ?>
</div>
<div class="row" style="background:#f1f1f3;">
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="row">
      <h1 class="font-Ti color-bl float-right">
       <p style="color:gray;">  سوف يتم التسليم فى</p>
      </h1>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-4"><img src="img/del.png" class="img-responsive" style="max-height:75px;"></div>
       <div class="col-md-9 col-sm-8 col-xs-8">
         <div class="row " style="direction:rtl;text-align:right; font-size:16pt;">
           <span style="color:red;"> 20 </span> <span style="color:gray;">/2017/11 </span></div>
         <div class="row"style="direction:rtl;text-align:right; font-size:14pt;"> <span style="color:blue;">الساعة </span>
           10:00
           <span style="color:green;">ص</span></div>
       </div>

    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="row">
      <h1 class="font-Ti color-bl float-right">
       <p style="color:gray;"> المبلغ المقدر للعملية
       </p>
      </h1>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-4"><img src="img/money.png" class="img-responsive"></div>
       <div class="col-md-9 col-sm-8 col-xs-8 font-Ti color-bl fit4" style="text-align:right;">
       <span style="color:green;">  15</span> ريال . س
       </div>

    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs">
    <h1 class="font-Ti color-bl" style="font-size:14pt;"><span class="glyphicon glyphicon-warning-sign"></span>
         يجب تحديد المكان بدقة على الخريطة  وذلك بالتكبير و الضغط على المكان المطلوب
    </h1>
  </div>
</div>
<div class="row"style="padding-top:30px;padding-bottom:20px;background:#e7e7e9;" >
  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
    <fieldset id="full" class="row fullwidth pad-0 ">
     <div class="col-md-6 col-lg-6 col-sm-4 col-xs-4"style="margin: 0px;padding: 0px;">
    <input type="radio" value="yes" id="fullDoc" onclick="radiofull();" name="full"  required>
    <span class="glyphicon glyphicon-book"></span>المستند كامل
      </div>

     <div class="col-md-6 col-lg-6 col-sm-8 col-xs-8 pad-0 ">
    <div class="row pad-0" >
    <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2 pad-0 " style="margin-left: -10px;">
    <div style="width: 40%; display: inline;">
    <input type="radio" value="no" id="notFull" onclick="radiofull();" name="full" required></div>
    <div style="width: 40%; display: inline;">
      <span class="glyphicon glyphicon-file" ></div></span></div>

       <div class="col-md-4 col-lg-4 col-sm-5 col-xs-5 pad-0 ">
       <div style="width: 40%; display: inline;">
       من</div>
     <input type="text" nam="from" id="from" class="fullwidth" style="width: 60%;" required></div>
     <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 pad-0">
     <div style="width: 40%; display: inline;">
     إلى
       </div>
     <input type="text" name="to" id="to" class="fullwidth" style="width: 60%;" required>


                  </div>
                   </div>
                    </div>

                 </fieldset>


  </div>
  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
    <fieldset di="color" class="row " >
         <div class="col-md-6 col-lg-6 col-sm-4 col-xs-4 ">

         <div class="rad">
         <input type="radio" value="yes" name="color" autocomplete="off" required>
         <img src="img/color.png" width="40px" height="40px" class="imgfit" />
         ألوان
         </div>

       </div>

       <div class="col-md-5 col-lg-5 col-sm-4 col-xs-4 pad-0">
         <div class=" rad">
         <input type="radio" value="no" name="color" autocomplete="off" required>
         <img src="img/black.png" width="40px" height="40px" class="imgfit"/>
         أبيض و أسود
         </div>
       </div>


    </fieldset>


  </div>
</div>

<div class="row" style="background:url('img/serhead.png');background-size:100% 100%;margin-top:20px;">
  <div id="mainform" style="margin-top:20px" >

    <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6 form-group float:right;">
        <div class="cols-sm-10">
        <div class="input-group raduis-10">
          <span class="input-group-addon">
          <i class="fa fa-user" aria-hidden="true"></i></span>
          <input type="text" class="form-control" name="name" id="name"  placeholder="الإسم رباعى" required/>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 form-group">
      <div class="cols-sm-10">
        <div class="input-group  raduis-10">
          <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
          <input type="text" class="form-control" name="email" id="email"  placeholder="البريد الإلكترونى" required/>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 form-group">
      <div class="cols-sm-10">
        <div class="input-group  raduis-10">
          <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
          <input type="text" class="form-control" name="username" id="username"  placeholder="الهاتف" required/>
        </div>
      </div>
    </div>

     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 form-group row ">
    <div class="col-md-12 fullwidth">
    <input type="submit"  value="طباعة"  class="btn btn-primary btn-lg btn-block ">
    </div>
    </div>
  </div>
</div>
<input type="text" id="GPSlocation" name="GPSlocation" hidden>
<input type="text" id="choosenLocation" name="choosenLocation" hidden>
</form>

<div id="footer" class="col-md-12">
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
