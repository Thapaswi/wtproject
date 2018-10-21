<html>
<head>
<title>GreenLand</title>
<style>
header
{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(tqu.jpg);
	height:100vh;
	background-position:center;
	background-size:cover;
}

.login-box{
	width:320px;
	height:250px;
	opacity:0.8; 
	color:#fff;
	top:50%;
	left:80%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	padding:70px 30px;
}
.avatar{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-14%;
	left:110px;
	
}
h1{
	margin:0;
	padding:0 0 20px;
	text-align:center;
	font-size:20px;
}
.login-box p{
	margin:0;
	padding:0;
	font-weight:bold;
}
.login-box input{
	width:100%;
	margin-bottom:20px;
}
.login-box input[type="text"],input[type="password"],input[type="email"],input[type="number"]{
	border:none;
	border-bottom:1px solid #fff;
	outline:none;
	background:transparent;
	height:40px;
	color:#fff;
	font-size:16px;
}
.login-box input[type="submit"],input[type="button"]{
	border:none;
	outline:none;
	height:40px;
	background:#fb2525;
	color:#fff;
	font-size:18px;
	border-radius:20px;
	
}
.login-box input[type="submit"]:hover,input[type="button"]:hover{
		cursor:pointer;
		background:#ffc107;
		color:#000;
}
.login-box a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:darkgrey;
}
.login-box a:hover{
	color:#ffc10;
}
</style>
</head>
<body>
<header>
<div class="login-box"><img src="tq1.jpg" class="avatar"></img>
<h1><?php 
session_start();
echo "Restuarent Bill is {$_SESSION["finalPrice"]}";
?></h1>
<form action="logout1.php" method="post">
<input type="button" value="HOME" onclick='location.href="yt.html" '>
<input type="submit" value="LOGOUT" name="submit">


</form>
</div>
</header>
</body>
</html>
