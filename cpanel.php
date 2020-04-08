<html>
 <head>
  <title>MK</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
   	  <link rel="stylesheet" href="css/bootstrapar.css">
   	    <link rel="stylesheet" href="css/socialBtns.css">
	   	<link rel="stylesheet" href="css/style.css" />
	   	<link rel="stylesheet" href="css/cpstyle.css" />
	   	<script src="js/html5shiv.min.js"></script>
	   	<script src="js/respond.min.js"></script>
	</head>
<body>

<div class="container-fluid">
<div id="main" class="row-fluid fullwidth">
<div class="col-lg-12 fullwidth" >
<div class="fullwidth">
	<?php include 'header.php';	 ?></div>
</div>
<div class="clearfix"></div>

<div id="title" class="col-lg-12">
<div class="row-fluid fullwidth">
	<div class="col-md-4 col-sm-4 col-xs-4 "></div>
		<div class="col-md-2 col-sm-2 col-xs-2">
		<img  src="img/admin-icon-2.png" width="50" height="50" class=" img-responsive left"></div>
		<div id="cptitle"class="col-md-3 col-sm-3 col-xs-3"><h1 >لوحة التحكم</h1></div>
		<div class="col-md-4 col-sm-4 col-xs-4 "></div>
		<div class="clearfix"></div>
		<div class="col-md-12 fullwidth"><hr></div>
		<div class="clearfix"></div>
		<div class="col-md-12 fullwidth">
			
			<table class="table table-striped table-bordered t1">
  <thead class="thead-inverse th1">
    <tr>
      <th>م</th>
      <th>الإسم</th>
      <th>العنوان</th>
      <th>الهاتف</th>
       <th>المستند</th>
      <th>موعد التسليم</th>
      <th>الحالة</th>
       <th>الدفع</th>
          <th>#</th>
          </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>سعد إبراهيم عبد الرحمن</td>
      <td>الرياض /المركز العلمى</td>
      <td>0123456789</td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td>اليوم 09:00 ص</td>
      <td><img src="img/stat1.png" width="30" height="30"  class="img-circle"></td>
        <td><img src="img/paypal.png" width="30" height="30"  class="img-circle"></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" name="ch" value="#" checked >
    </label></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>محمد عبد الرحمن محمد</td>
      <td>الرياض /المركز العلمى</td>
      <td>0123456789</td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td>اليوم 09:00 ص</td>
      <td><img src="img/stat2.png" width="30" height="30"  class="img-circle"></td>
        <td><img src="img/money.png" width="30" height="30"  class="img-circle"></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
        <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td></td>
      <td></td>
        <td></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
            <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td></td>
      <td></td>
        <td></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
            <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td></td>
      <td></td>
        <td></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
            <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td></td>
      <td></td>
        <td></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
            <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td></td>
      <td></td>
        <td></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
            <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="img/file.png" width="30" height="30" class="img-circle"></td>
      <td></td>
      <td></td>
        <td></td>
        <td>    <label class="btn btn-default active">
      <input type="checkbox" value="">
    </label>
   </td>
    </tr>
  </tbody>
</table>
			
		</div>
		<div class="col-md-12">
		<div style="text-align: center;">
			<button type="button" class="btn btn-info mar">بحث</button>
			<button type="button" class="btn btn-warning mar">تعديل الطلب</button>
			<button  id="sbu" type="button" class="btn btn-secondary mar"> &nbsp;&nbsp;&nbsp;  حذف الطلب<img src="img/error.png" width="35" hight="35" class="img-responsive mar"> </button>
			<button type="button" class="btn btn-success mar">تم التسليم</button>
			<button type="button" class="btn btn-danger mar">لم يتم التسليم</button>
	</div>
			
		</div>
		<div class="col-md-6">
		<div class="center-block">
		<table class="table table-striped table-bordered t1">
  			<thead class="thead-inverse th1">
    		<tr>
      			<th>تم التسليم <img src="img/stat1.png" width="50px" height="50px"></th>
			</thead>
			</tr>
			<tr><td>سعد ابراهيم عبد الرحمن</td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			
			</table>
			</div>
			
		</div>
		<div class="col-md-6">
						<div class="center-block">
		<table class="table table-striped table-bordered t1">
  			<thead class="thead-inverse th1">
    		<tr>
      			<th>لم يتم التسليم <img src="img/stat2.png" width="50px" height="50px"></th>
			</thead>
			</tr>
			<tr><td>محمد عبد الرحمن محمد</td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			</table>
			</div>
			
		</div>

</div>
</div>
<br>
<br>
<br>
<br>




<div id="footer" class="col-md-12">
		<div class="container">
				<?php
					include 'footer.php';
				 ?>
		 </div>
</div>
      
       
        </div>
        </div>	
       
       
        <script src="js/jquery.min.js"></script>  
	    <script src="js/bootstrap.min.js"></script>
 	    <script src="js/jquery.fittext.js"></script>


</body>
</html>
