<?php
include ('connect.php');
session_start();
 $id=$_GET['id'];
?>
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
<script type="text/JavaScript" src="logintest.js">
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
			
				
				
				
				
				<li ><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="logout.php" accesskey="5" title="">Logout</a></li>
				
				
			</ul>
		</div>
	</div>
</div>
 
<div id="footer">
<div id="Sign-Up"  style="align:center;">

<?php 

 $result = mysql_query("SELECT * FROM empdata where id='$id'");
 while($row = mysql_fetch_array($result))
 {
 	$name=$row['name'];
 	$email=$row['email'];
	$phno=$row['phno'];
 	$city=$row['city'];
 	
 }
 ?>
 <fieldset style="width:30%;margin-left:32%;">
 <table border="0">
 <form method="POST" name="reg" action="" onsubmit="return validate();"  enctype="multipart/form-data">
 <tr><td><label>Name</label></td> 
  <td> <input type="text" name="name" id="name"  value="<?php echo $name ?>" class="form-control"></td> </tr>
  <tr><td><label>Email</label></td> 
  <td> <input type="text" name="email" id="email"  value="<?php echo $email ?>" class="form-control"></td> </tr>
  <tr><td><label>PassWord</label></td> 
 <td><input type="password" name="pass" id="pass" class="form-control"></td> </tr> 
  <tr><td><label>pnumber</label></td> 
  <td> <input type="text" name="phno" id="phno"  value="<?php echo $phno ?>" class="form-control"></td> </tr>
<tr><td><label>Country</label></td>
<td class="dropdown"> <select name="city" id="city" class="btn dropdown-toggle" id="dropdownMenu1" 
      data-toggle="dropdown">

  <option value="hyd">hyd</option>
  <option value="chennai">chennai</option>
  <option value="bangalore">bangalore</option>
  <option value="delhi" >delhi</option>
</select></td></tr>


 <tr><td></td> <td><input id="button" type="submit" name="submit" value="update" class="btn btn-info"></td> </tr> 
 </form> 
 </table> 
</fieldset>
 
 <?php
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 // get form data, making sure it is valid
 $name = $_POST ['name'];	
 $email = $_POST ['email'];
 $pass = base64_encode ( $_POST ['pass'] );
 $phno = $_POST ['phno'];
 $city = $_POST ['city'];

 // save the data to the database
 mysql_query("UPDATE empdata SET name='$name', email='$email',pass='$pass',phno='$phno',city='$city' WHERE id='$id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header('location:display.php');

 }
?>
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
