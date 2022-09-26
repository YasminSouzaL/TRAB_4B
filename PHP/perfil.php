<?php
    session_start();
    include "cabecalho.php";
?>

<?php 
	 
	 echo '<br>
	      <center>
           <main>
    <br>
		<h1 class="text-center"><strong>Perfil do usuário</strong> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></h1>
<br>
	<div class="card border-info mb-3"  style="max-width: 28rem;">
	<div class="card-header"><h3><strong>Dados do perfil </strong></h3></div>
	<div class="card-body">	  
		 
	
	<br>';
	
        echo "
			   <center>
			   
			   <tr>
			   <td>
			  
			     <label><h4>Login  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
									<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
									</svg></h4></label> ".$_SESSION['login']." </td> 
					   <br>
					   <br>
			     <label ><h4>  Nome <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
									<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
									</svg> </h4></label> ".$_SESSION['nome']." </td>
					   <br>
					   <br>
				<label ><h4>Idade  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
									<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
									</svg>  </h4></label>".$_SESSION['idade']." </td>	
					   <br>
					   <br>
			    <label ><h4>Sexo <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
									<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
									</svg>   </h4></label>".$_SESSION['sexo']."</td>
					   <br>
					   <br>
			    <label ><h4>Senha <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
									<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
									</svg>   </h4></label>".$_SESSION['senha']." </td></tr>
					</div>
					</center>";
			   
			
		
?>
<br>
<br>
<br>
<br>

	<p class="text-center">
		<a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="AlteraSenha.php">Continue para alterar senha</a></p>
		<p class="text-center">
		<a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="AlteraNomeBD.php">Continue para alterar nome</a>
	</p>
	<p class="text-center">
		<a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="confirma.php">Continue para excluir conta</a>
	</p>

	<div>
	<p class="text-center">
    <a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="Novas_pags/terminal_ouro.php"> Terminal Ouro Verde </a>
     </p>
	 <p class="text-center">
    <a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="../PHP/login.php">Terminal Central</a>
	<p class="text-center">
    <a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="../PHP/login.php">Terminal Campo Grande</a>
</p>
</p>
<?php

  include "rodape.php";
?>