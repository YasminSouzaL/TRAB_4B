<?php
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome =  $_POST['nome'];
	$idade = $_POST['idade'];
	$sexo =  $_POST['sexo'];
	

	if(!$login || !$senha )
	{
	    include "erro.php";
	    exit;
	}

	include "conecta.php";
	$senha=md5($senha);
	$query = "insert into usuario (nome,idade,sexo,login, senha) values ('$nome','$idade','$sexo','$login','$senha')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	include "sucesso.php";
