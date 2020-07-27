<?php

if(isset($_POST)){
	//header("Content-Type:application/json; charset=UTF-8");
	//$dbh=new PDO('mysql:host=localhost:90;dbname=data','root','');

	$array=[
		"name"=>$_POST['name'],
		"email"=>$_POST['email'],
		"phone"=>$_POST['phone'],
	];


echo json_encode($array);

}

?>