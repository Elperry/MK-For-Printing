
          <div class="container" >

			<div  class="row modal-login" >
				<div class="col-md-12 col-sm-12 col-xs-12" >
				<div class="main-login modal-content "id="serhead">
								<div class="avatar">
					<img src="img/avatar2.png" alt="Avatar">
				</div>
				       <div class="font-Ti title" ><br> بيانات الخدمة</div>
				</div>

				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form class="row font-Ti color-bl radiotxt" style="background:#ffffff ;">
					 <div class="col-md-2 col-lg-2 hidden-sm hidden-xs" style="margin: 0px;padding: 0px;">
					 	<img src="img/prop.png" id="prop" class="img-responsive"style="float:right;">
					 </div>
					 <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 pad-0 " style="padding-top: 15px;">
						 <fieldset id="full" class="row fullwidth pad-0 " style="border-bottom: 1px solid black;">
						  <div class="col-md-6 col-lg-6 col-sm-4 col-xs-4 "style="margin: 0px;padding: 0px;">
						 <input type="radio" required  value="yes" id="fullDoc" onclick="radiofull();" name="full" >
						 <span class="glyphicon glyphicon-book"></span>المستند كامل
							 </div>

						  <div class="col-md-6 col-lg-6 col-sm-8 col-xs-8 pad-0 ">
						 <div class="row pad-0" >
						 <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2 pad-0 " style="margin-left: -10px;">
						 <div style="width: 40%; display: inline;">
						 <input type="radio" required  value="no" id="notFull" onclick="radiofull();" name="full"></div>
						 <div style="width: 40%; display: inline;">
							 <span class="glyphicon glyphicon-file" ></div></span></div>

							  <div class="col-md-4 col-lg-4 col-sm-5 col-xs-5 pad-0 ">
							  <div style="width: 40%; display: inline;">
							  من</div>
							<input type="text" required  nam="from" id="from" class="fullwidth" style="width: 60%;"></div>
							<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 pad-0">
							<div style="width: 40%; display: inline;">
							إلى
								</div>
							<input type="text" required  name="to" id="to" class="fullwidth" style="width: 60%;">


                           </div>
                            </div>
                             </div>

                          </fieldset>
						  <fieldset di="color" class="row " style="border-bottom: 1px solid black;">
						  	   <div class="col-md-6 col-lg-6 col-sm-4 col-xs-4 ">

									 <div class="rad">
									 <input type="radio" required  value="yes" name="color" autocomplete="off">
									 <img src="img/color.png" width="66px" height="66px" class="imgfit" />
									 ألوان
									 </div>

								 </div>

								 <div class="col-md-5 col-lg-5 col-sm-4 col-xs-4 pad-0">
									 <div class=" rad">
									 <input type="radio" required  value="no" name="color" autocomplete="off">
									 <img src="img/black.png" width="66px" height="66px" class="imgfit"/>
									 أبيض و أسود
									 </div>
								 </div>


						  </fieldset>


							</div>
                     <div class="clearfix"></div>
					 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad-0">

					 	<?php include('map.php'); ?>

					 </div>


					 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <div class="row" style="direction: rtl;">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <h1 class="font-Ti color-bl" style="font-size:14pt;"><span class="glyphicon glyphicon-warning-sign"></span>
                      يجب تحديد المكان بدقة على الخريطة  وذلك بالتكبير و الضغط على المكان المطلوب
                 </h1>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:-30px;">
                 <h1 class="font-Ti color-bl float-right">
                  <p style="color:gray;">  سوف يتم التسليم فى</p>
                 </h1>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <h1 class="font-Ti color-bl float-right">
                  <p style="color:gray;"> المبلغ المقدر للعملية

                  </p>
                 </h1>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="row">
                   <div class="col-md-3 col-sm-4 col-xs-4"><img src="img/money.png" class="img-responsive"></div>
                    <div class="col-md-9 col-sm-8 col-xs-8 font-Ti color-bl fit4" style="text-align:right;font-size:35pt;">
                    <span style="color:green;">  15</span> ريال . س
                    </div>
               </div>
             </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div  style="text-align:right;vertical-align:bottom;font-size:20pt; border-bottom:2px solid #c1cd5f;">
                    <img src="img/visa.png" class="img-responsive" style="max-width:50px; display:inline;"> طريقة الدفع :
                 </div>
               </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="rad">
                   <input type="radio" required  value="yes" name="cashNow" autocomplete="off">
                   <img src="img/paypal.png" width="40px" height="40px" class="imgfit" />
                    مباشرة
                   </div>
                 </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="rad">
                   <input type="radio" required  value="No" name="cashNow" autocomplete="off">
                   <img src="img/Money.png" width="40px" height="40px" class="imgfit" />
                     عند الإستلام
                   </div>

                </div>
             </div>

					 </div>

          <div class="row">
            <input type="text" required  id="GPSlocation" name="GPSlocation" hidden>
            <input type="text" required  id="choosenLocation" name="choosenLocation" hidden>
            <button type="submit" class="btn btn-primary" style="font-size:20pt; margin-top:15px; width:100%;"> إجراء الطلب </button>
          </div>

			</form>
      	</div>
</div>

</div>
