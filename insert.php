<?php
include ('connect.php');
//session_start();
//error_reporting(0);
//$_SESSION['id']=$row['id'];
if (isset ( $_POST ['submit'] )) {
	
	 $name = $_POST ['name'];	
	 $email = $_POST ['email'];
	 $pass = base64_encode ( $_POST ['pass'] );
	 $phno = $_POST ['phno'];
	 $city = $_POST ['city'];
	 $pic_name = $_FILES ['pic']['name'];
	 $pic_size = $_FILES ['pic']['size'];
	 $pic_type = $_FILES ['pic']['type'];
	 $pic_path = 'upload/'.$pic_name; 
	 
	 $sel = mysql_query("SELECT email FROM empdata WHERE email = '".$email."'");
	 $res = mysql_fetch_array($sel);
	 
	 if($res > 0)
	 {
		$sucess = 'Already Registered with this E-mail Address';
	 
	 }else{	 
	
	$query = "INSERT INTO empdata (name,email,pass,phno,city,pic) VALUES('$name','$email','$pass','$phno', '$city','$pic_path')";
	$send = mysql_query ( $query ) or die ( mysql_error () );
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["pic"]["name"]);
$extension = end($temp);

/*if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/pjpeg")
|| ($_FILES["pic"]["type"] == "image/x-png")
|| ($_FILES["pic"]["type"] == "image/png"))
&& ($_FILES["pic"]["size"] < 20000)
&& in_array($extension, $allowedExts)) {*/
 /* if ($_FILES["pic"]["error"] > 0) {
    echo "Return Code: " . $_FILES["pic"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["pic"]["name"] . "<br>";
    echo "Type: " . $_FILES["pic"]["type"] . "<br>";
    echo "Size: " . ($_FILES["pic"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["pic"]["tmp_name"] . "<br>";*/
    
   if (file_exists("upload/" . $_FILES["pic"]["name"])) {
      echo $_FILES["pic"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["pic"]["tmp_name"],
      "upload/" . $_FILES["pic"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["pic"]["name"];
     
    // header('location:sucess.php');
	
	$sucess = 'Sucessfully Created';
   
    
    }
	
	}
  }
 

	

	
	
	
	?>
		
	
	
	