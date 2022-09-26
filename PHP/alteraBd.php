<?php
	

	$login =  $_POST['login'];
	$senha1 =  $_POST['senha1'];
	$senha2 =  $_POST['senha2'];

	  $resp = $_POST['escolha1'];

   if($resp == "não"){
		  
		  echo "Alteração Cancelada";
		    header("Location: perfil.php");
	      exit;
	  }

	else {
		if($senha1 != $senha2)
	{
	    header("Location: erro.php");
	    exit;
	}

	include "conecta.php";
	$query = "UPDATE usuario SET senha = '".md5($senha1)."' WHERE login = '$login'";
	echo $query;
	
    mysqli_query($conn,$query) or die(mysqli_error($conn));
	header("Location: sair.php");
	}
?>

