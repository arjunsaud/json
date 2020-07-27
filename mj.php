<?php 

$con=mysqli_connect('localhost','root','');
if(!$con){
	echo "not connected";
}
if(!mysqli_select_db($con,'data')){
	echo "database not seleceted";
}
$sql= "SELECT * FROM class";


$result=mysqli_query($con,$sql);

$jarry=array();

while($row=mysqli_fetch_assoc($result))
{
	$jarry[]=$row;
}
echo json_encode($jarry);
?>