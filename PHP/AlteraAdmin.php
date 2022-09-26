<?php
  
  
    session_start();
	$login = $_POST['id'];
	$nome =  $_POST['id1'];
	echo $nome.$login;

	include "conecta.php";
	$query = "update usuario SET nome = '$nome' where login = '$login'";
	echo $query;
	
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	header("Location: admin.php");


?>