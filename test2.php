<?php
	$conn = mysqli_connect("localhost","root", "", "hotel1") or die("Failed to connect tp");
	
	$val = mysqli_query($conn,'select 1 from myItems LIMIT 1');

if($val == FALSE)
{

	$sql="CREATE TABLE myItems(
id INT(6)  PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) ,
image MEDIUMBLOB,
price int(11))";

mysqli_query($conn,$sql);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Single Room','sroom.jpg',1000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Double Room','droom.jpg',2000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Double Double','ddroom.jpg',3000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Twin room','troom.jpg',4000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Inter Connecting','icroom.jpg',5000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Adjoining Room','adjroom.jpg',6000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Cabana','croom.jpg',7000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Suite Room','suroom.jpg',8000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Parlor','proom.jpg',9000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Efficiency Room','eroom.jpg',10000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('King Bedroom','kroom.jpg',15000)";

mysqli_query($conn,$sql1);
$sql1="INSERT INTO myItems(name, image, price) VALUES ('Queen Bedroom','qroom.jpg',20000)";

mysqli_query($conn,$sql1);
}
	
?>