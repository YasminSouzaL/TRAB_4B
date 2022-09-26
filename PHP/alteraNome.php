

<?php
  
  
    session_start();
 
	$nome = $_POST['nome'];
	$login =  $_POST['login'];
     $resp = $_POST['escolha1'];
    
   if($resp == "não"){
		  
		  echo "<script>alert ('Alteração cancelada')</script>";
		    header("Location: perfil.php");
	      exit;
	  }
	  
	include "conecta.php";
	$query = "UPDATE usuario SET nome = '$nome' WHERE login = '$login'";
	echo $query;
	

	mysqli_query($conn,$query) or die(mysqli_error($conn));
	header("Location: sair.php");
	
	
   
?>