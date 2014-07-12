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

<meta content="text/html;charset=utf-8" http-equiv="Content-Type">

<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
 $("form").submit(function(){
	     $(".error").hide();
		var pic=$('#pic').val();
		 if(pic==""){
	 $("#pic").after('<span class="error" style="color:red ">Please enter pic.</span>');
	  hasError = true;
			//alert('please enter pic');
			 $('#pic').focus();
			return false;
			}
		return true;
	});
	});
</script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->


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
<div id="Sign-Up">
 <fieldset style="width:30%;margin-left:32%;">

 <table border="0">
 <form method="POST" name="reg" action=""   enctype="multipart/form-data">
<td><input type="file" name="file" id="file" size="50" /></td></tr>
</span>
 <tr><td></td> <td><input id="button" type="submit" name="submit" value="Sign-Up" class="btn btn-info"></td> </tr> 
 </form> 
 </table> 
 </fieldset> 
 </div> 
	<div class="container">
		
	</div>
</div>
<?php
if (isset ( $_POST ['submit'] )) {


$allowedExts = array("pdf", "doc", "docx");
$extension = end(explode(".", $_FILES["file"]["name"]));

if ( ( ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "text/pdf") )
&& ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts))
{
	$file_name = $_FILES ['file']['name'];
	$file_size = $_FILES ['file']['size'];
	$file_type = $_FILES ['file']['type'];
	$file_path = 'uplod/'.$file_name;
	$query = "UPDATE empdata SET doc='$file_path'  WHERE id='$id'";
	$send = mysql_query ( $query ) or die ( mysql_error () );
	
echo	move_uploaded_file($_FILES["file"]["tmp_name"], "uplod/" . $_FILES["file"]["name"]);
}
else
{
	echo "Invalid file.";
}
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
