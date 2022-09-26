<?php
    session_start();
    include "cabecalho.php";
?>
<br>
<h1 class="text-center"><strong>Autenticação</strong></h1>
<br>
<?php 
    if (isset($_SESSION['login'] )){

        echo "<h3 class='text-center'>".$_SESSION['nome']."</h3>";
        if ($_SESSION['login']=="admin@ifsp.edu.br")
          header("Location: admin.php", );
		
		else 
        header("Location:perfil.php");
    }

    else
        echo "<h3 class='text-center'>Você não está autenticado</h3>";
?>
        
<br>
<center>
<main>

	<div class="card border-info mb-3" style="max-width: 28rem;">
	<div class="card-header"><h3><strong>Login</strong></h3></div>
	<div class="card-body">
  
	<form method="post" action="autentica.php">
		<div class="form-group">
		
		<div class="form-group">
			<label for="login"><h4>Nome : </h4></label> 
			<input type="text" class="form-control" name="nome" placeholder="Nome">
		</div>
		
			<label for="login"><h4>E-mail:</h4></label>
			<input type="text" class="form-control" name="login" placeholder="E-mail">
		</div>
		
		<div class="form-group">
			<label for="senha"><h4>Senha :</h4></label>
			<input type="password" class="form-control" name="senha" placeholder="Senha">
		</div>
		<button type="submit" class="btn  btn-block btn-info col-6 " id="autenticarBt">Autenticar</button>
	</form>

	<form method="post" action="cadastra.php">
		<button class="btn  btn-block btn-info col-6 " id="createUserButton">Criar Nova Conta</button>
	</form>

	</div>
</main>
</center>
<br>
<?php
  include "rodape.php";
?>