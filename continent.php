<?php
	$conn = mysqli_connect("localhost","root", "", "cont2") or die("Failed to connect tp");
	
	$val = mysqli_query($conn,'select 1 from myItems LIMIT 1');

if($val == FALSE)
{

	$sql="CREATE TABLE myItems(
id INT(6)  PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) ,
image MEDIUMBLOB,
price int(11))";
mysqli_query($conn,$sql);

$sql1="INSERT INTO myItems(name, image, price) VALUES ('vegetable soup','vegetable.jpg',100)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Lemon risitto','lemon.jpg',200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Pistou','pistou.jpg',300)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Goatscheese','goatcheese.jpg',400)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Tamato tartlests','tomato.jpg',200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Fried fish','fried.jpg',200)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Garpechicken','grape.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Hamleg','hamleg.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Apple pait','apple.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('chicken Milano','milano.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Embassy mutton','embassy.jpg',390)";
mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Rara mutton','rara.jpg',390)";
mysqli_query($conn,$sql1);
}

	
?>