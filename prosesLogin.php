<?php 
  $username = $_POST["username"];
 	$password = $_POST["password"];

 	if($username == "admin" && $password == 1234){
 		$_SESSION["username"] = $username;
 		header("Location: registrasi.php");
 	}else{
 		header("Location: login.php");
 	}
?>
