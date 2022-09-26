<?php
    include "cabecalho.php";
?>
<br>
	<center>
		<br>
		<h1 class="text-center"><strong>Cadastrando Usuário </strong></h1>
		<br>
	<main>
		<div class="card border-info mb-3" style="max-width: 28rem;">
		<div class="card-header"><h3><strong>Novo Cadastro</strong></h3></div>
		<div class="card-body">

		<form method="post" action="cadastraBd.php">
	
			<div class="form-group">
				<label for="login"><h4>Nome :</h4></label>
				<input type="text" class="form-control" name="nome" placeholder="Nome">
			</div>
	
		<div class="form-group">
			<label for="idade"><h4>Idade:</h4></label>
			<input type="text" class="form-control" name="idade" placeholder="Idade">
		</div>
		<br>
		
		<div class="radio">
			<label><h4>Sexo :</h4></label>
			<input type="text" class="form-control" name="sexo" placeholder="Sexo">
		</div>
	  <br>
	  
        <div class="form-group">
            <label for="login"><h4>E-mail:</h4></label>
            <input type="text" class="form-control" name="login" placeholder="E-mail">
        </div>
		
        <div class="form-group">
            <label for="senha"><h4>Senha:</h4></label>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
        </div>
         <button type="submit" class= "btn btn-info" id="cadastrarBt">Cadastrar</button>
    </form>
    </div>
 </main>
 </center>
<br>
<?php
  include "rodape.php";
?>