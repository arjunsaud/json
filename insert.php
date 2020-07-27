<?php


$con=mysqli_connect('localhost','root','');
if(!$con){
	echo "not connected";
}
if(!mysqli_select_db($con,'data')){
	echo "database not seleceted";
}

$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];


$sql="INSERT INTO class (name,email,phone) VALUES('$name','$email','$phone')";
if(!mysqli_query($con,$sql)){
	echo "data not inseted";
}
else{
	echo "inserted";
}



?>