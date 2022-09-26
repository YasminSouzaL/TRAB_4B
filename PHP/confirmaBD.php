<?php
    session_start();
	include "conecta.php";
	
	
	$login =  $_POST['id'];
    $resp = $_POST['escolha1'];

   if($resp == "nao"){
	   echo " exclusão cancelada";
		    header("Location: perfil.php");
	      exit;
	  }
	  
	else{ 
	$query = "DELETE FROM usuario WHERE login = '".$login."'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn))
		 header("Location: sair.php");
	else
		header("Location: erro.php");
	}
?>