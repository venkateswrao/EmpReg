<?php 
include ('connect.php');
session_start();
if(isset($_POST['submit']))
{
 $name = $_POST['email'];
 $pass = base64_encode ( $_POST ['pass'] );
	
		  $query = "SELECT * FROM empdata WHERE email ='$name' AND pass ='$pass'";
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
		$row = mysql_fetch_array($result);

		if(is_array($row) && !empty($row))
		{
			$validuser = $row['name'];
			$_SESSION['id']=$row['id'];
			$_SESSION['user'] = $validuser;
			header("Location:sucess.php");
			
			//echo "User :"." ".$validuser;
			//exit();
			
			
		}
		else
		{
			$error="Invalid Username or Password";
			header("Location:login.php?error=$error");
		}

		
	
}

 ?>