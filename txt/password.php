<?php 
	
	$exampleInputEmail1=$_POST["exampleInputEmail1"];
	$exampleInputPassword1=$_POST["exampleInputPassword1"];


	$my_exampleInputEmail1=md5($exampleInputEmail1);
	$my_exampleInputPassword1=md5($exampleInputPassword1);
	
	if($my_exampleInputEmail1=="e877ab5f8f493dcd56415759ebd0856a"&&$my_exampleInputPassword1=="e877ab5f8f493dcd56415759ebd0856a"){
		echo "ok";
	}


?>