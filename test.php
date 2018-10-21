<?php
	$conn = mysqli_connect("localhost","root", "", "india") or die("Failed to connect tp");
	
	$val = mysqli_query($conn,'select 1 from myItems LIMIT 1');

if($val == FALSE)
{

	$sql="CREATE TABLE myItems(
id INT(6)  PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) ,
image MEDIUMBLOB,
price int(11))";
mysqli_query($conn,$sql);

$sql1="INSERT INTO myItems(name, image, price) VALUES ('corns','corns.jpg',100)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('mushrooms','mushrm.jpg',200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('cheese balls','cheeseballs.jpg',300)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('butter naans','naan.jpg',400)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('jeera rice','jeerarice.jpg',200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('chicken 65','chick65.jpg',200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('kakori kebab','kakori.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('chicken satay','satay.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('chicken wings','wings.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Grilled chicken','grill.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('kadai chicken','kadai.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('fish biriyani','fishbir.jpg',390)";
mysqli_query($conn,$sql1);
}

	
?>