<?php
		
		if(null==$_REQUEST['name'])
		{
			$error="Please Enter your name";
			include "error.php";
			include "index.php";
			exit();
		}
		
		if(null==$_REQUEST['email'])
		{
			$error="Please Enter your Email";
			include "error.php";
			include "index.php";
			exit();
		}
		if(null==$_REQUEST['message'])
		{
			$error="Please Enter your Message";
			include "error.php";
			include "index.php";
			exit();
		}
		include "db_connect.php";
		$name=mysqli_real_escape_string($link,$_REQUEST['name']);
		$email=mysqli_real_escape_string($link,$_REQUEST['email']);
		$subject=mysqli_real_escape_string($link,$_REQUEST['subject']);
		$message=mysqli_real_escape_string($link,$_REQUEST['message']);
		$sql="insert into  feedback set name='$name',email='$email',subject='$subject',message='$message'";
		if(!mysqli_query($link,$sql))
		{
			$error="Sorry there was  a problem processing your request";
			include "error.php";
			include "index.php";
			exit();
		}
	

	if(!mail("library.nitsikkim@gmail.com",$subject,$message));
	{
		echo "Sorry";
	}
	else
	{
		
		echo "Thanks for your views.";
		exit();
	}
	
	
?>




