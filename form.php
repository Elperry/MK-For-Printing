
     
     <div class="container">
      
      
      <div class="tab-content">
        <div id="signup">    
      
         	<div class="container">
			<div id="myModal" class="row main modal-login">
				<div class="main-login main-center modal-content">
								<div class="avatar">
					<img src="img/avatar.png" alt="Avatar">
				</div>				
				        	      <ul class="tab-group row fullwidth"><br>
        <button class="btn btn-primary font-Ti" onClick="myHideFunction('si')">مستخدم جديد</button>
        <button class="btn btn-primary font-Ti" onClick="myHideFunction('lo')"> تسجيل الدخول</button>
      </ul>  
				<h4 class="modal-title">البيانات الشخصية</h4>
					<form id="mainform" enctype="multipart/form-data" class="" method="post" action="user.php">
						
						<div class="form-group">
								<div class="cols-sm-10">
								<div class="input-group raduis-10">
									<span class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="الإسم "  name="uname" required/>
								</div>
							</div>
						</div>
										
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group  raduis-10">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="البريد الإلكترونى"  name="email" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group  raduis-10">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="phone"  placeholder="الهاتف"  name="phone" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group  raduis-10">
									<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="email" id="password"  placeholder=" كلمة المرور"  name="password" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group  raduis-10">
									<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm_password" id="confirm_password"  placeholder=" تأكيد كلمة المرور"/>
								</div>
							</div>
						</div>
						 <div class="form-group row ">
	
						<div class="col-md-12 fullwidth">
						<input type="submit"  value="التالى >"  class="btn btn-primary btn-lg btn-block login-button">
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>


        </div>
        
        <div id="login" style="display: none;">   
          		<div class="container">
			<div id="myModal" class="row main modal-login">
				<div class="main-login main-center modal-content">
								<div class="avatar">
					<img src="img/avatar.png" alt="Avatar">
				</div>				
				        	      <ul class="tab-group row fullwidth"><br>
        <button class="btn btn-primary font-Ti" onClick="myHideFunction('si')">مستخدم جديد</button>
        <button class="btn btn-primary font-Ti" onClick="myHideFunction('lo')"> تسجيل الدخول</button>
      </ul>  
				<h4 class="modal-title">مرحبا بك</h4>
					<form id="mainform" enctype="multipart/form-data" class="" method="post" action="user.php">
						
						<div class="form-group">
								<div class="cols-sm-10">
								<div class="input-group raduis-10">
									<span class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="البريد الإلكترونى " required/>
								</div>
							</div>
						</div>
										
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group  raduis-10">
									<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder=" كلمة المرور" required/>
								</div>
							</div>
						</div>

						 <div class="form-group row ">
						 <div class="col-md-12 fullwidth">
							<input type="checkbox" checked="checked">  تذكرنى فى المرة القادمة
   								<br>
  							 <span class="psw" id="forg">نسيت <a href="#">كلمة السر</a></span>
						</div>
						<div class="col-md-12 fullwidth">
						<input type="submit"  value="التالى >"  class="btn btn-primary btn-lg btn-block login-button">
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>


        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
	
function myHideFunction(e) {
	var e;
	
	if(e=="si"){
		var x = document.getElementById("login");
		 x.style.display = "none";
		var y=document.getElementById("signup");
		y.style.display ="block";
	}else{
		var x = document.getElementById("login");
		 x.style.display = "block";
		var y=document.getElementById("signup");
		y.style.display ="none";
	}
    

} 	
</script>