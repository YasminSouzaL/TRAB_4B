<?php
	include "conecta.php";
	
	
	$login =  $_POST['id'];
    $resp = $_POST['escolha1'];

   if($resp == "não"){
	   echo "<script>alert ('Exclusão cancelada')</script>";
		    header("Location: perfil.php");
	      exit;
	  }
	  
	$id=$_POST['id'];
	$query = "delete from usuario where login = '".$id."'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn))
		header("Location: admin.php");
	else
		header("Location: erro.php");

?>