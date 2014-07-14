

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--<script type="text/JavaScript" src="logintest.js">
</script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	 $("form").submit(function(){
		     $(".error").hide();
			var email=$('#email').val();
			 var filter = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
			var pass=$('#pass').val();
			 if(email==""){
			$("#email").after('<span class="error" style="color:red ">Please enter your email address.</span>');
			 hasError = true;
				//alert('please enter email');
			 $('#email').focus();
			return false;
		    }else if (!filter.test(email)) {
			   $("#email").after('<span class="error" style="color:red ">Please enter a valid email address.</span>');
			    hasError = true;
				   // alert('Please enter a valid email address');
			 $('#email').focus();
		     return false;
			 }
			else if(pass==""){
		    $("#pass").after('<span class="error" style="color:red ">Please enter your password.</span>');
		   hasError = true;
					//alert('please enter password');
			 $('#pass').focus();
			return false;
			}
			 return true;
		});
		});
</script>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	<span class="icon icon-cog"></span>
			<h1><a href="#">Undeviating</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="" accesskey="1" title="">Dashbord</a></li>
				<li ><a href="register.php" accesskey="2" title="">Sign Up</a></li>
				<li class="active"><a href="login.php" accesskey="3" title="">login</a></li>
				
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
				
			</ul>
		</div>
	</div>
</div>
 
<div id="footer">
<div id="Sign-Up"  style="align:center;">
<?php if(isset($_GET['error'])){
 	echo $_GET['error'];
 }?>
 <fieldset style="width:30%;margin-left:32%;">
 <legend>Login Form</legend> 
 <table border="0">
 <form method="POST" name="" action="loginsert.php"  onsubmit="return validate();" > 
  <tr><td><label>Email</label></td> 
  <td> <input type="text" name="email" id="email" class="form-control"></td> </tr>
  <tr><td><label>PassWord</label></td> 
 <td><input type="password" name="pass" id="pass" class="form-control"></td> </tr> 
  <tr><td></td> <td><input id="button" type="submit" name="submit" value="login" class="btn btn-info"></td> </tr> 
  
</form>
 </table> 
 </fieldset> 
 </div> 
	<div class="container">
		
	</div>
</div>
<div id="copyright">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	<ul class="contact">
		<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
		<li><a href="#" class="icon icon-facebook"><span></span></a></li>
		<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
		<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
		<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
	</ul>
</div>
</body>
</html>


 
 