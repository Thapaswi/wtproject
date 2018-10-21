<?php
  if(isset($_POST['submit']))
  {
    $uname=$_POST['t1'];
    $pass=$_POST['t2'];
	$corp=$_POST['t3'];
	if(!($corp == $pass))
	{	echo "<script> alert('Password does not match') </script>";
		header("Refresh:0; url=register.html");
	}
	else{
			setcookie("user",$uname);
			setcookie("pwd",$pass);
			header("Refresh:1; url=login.html");
		}
  }
  
?>  
	