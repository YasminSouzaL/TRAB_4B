<?php
	
	session_start();

	$login =  $_POST['login'];
	$senha =  $_POST['senha'];
	$nome =   $_POST['nome']; 
	
	
	if(!$login || !$senha )
	{
	    header("Location: erro.php");
	}

	include "conecta.php";

	$SQL = "SELECT  login, senha , nome, sexo , idade 
	        FROM usuario
	        WHERE login = '$login' AND senha=md5('$senha') ";

	$result_id = mysqli_query($conn,$SQL) or die("Erro no banco de dados!");
	
	if($result_id){
		$num_results = mysqli_num_rows($result_id);
		for ($i=0; $i <$num_results; $i++){
			$usuario = mysqli_fetch_array($result_id);
		echo'\n'. 
		$_SESSION['login']=$usuario['login'];

		echo'\n'.
		$_SESSION['senha']=$usuario['senha'];

		echo '\n'.
		$_SESSION['nome']=$usuario['nome'];

		echo '\n'.
		$_SESSION['sexo']=$usuario['sexo'];
		echo '\n'.
		$_SESSION['idade']=$usuario['idade'];
	 	header("Location:login.php");
		}
	}
	/*
	else
	 header("Location:erro.php");
	 */
?>

	
