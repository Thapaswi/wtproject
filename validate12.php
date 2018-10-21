<?php
session_start();
  if(isset($_POST['submit']))
  {
     $uname=$_POST['t1'];
	 $pass=$_POST['t2'];
	 if($uname == $_COOKIE['user'] && $pass == $_COOKIE['pwd'])
	 {
		header("Refresh:1; url=yt.html");
     }
     else
     {
		header("refresh:1;url=register1.html");
     }
  }
?>  