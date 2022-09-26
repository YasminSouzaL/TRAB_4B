<?php
    session_start();
    include "cabecalho.php";
	
?>
    
	
	<center>
    <main>
      <br>
		<h1 class="text-center"><strong>Alterar Senha </strong>  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
			<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
		</svg></h1>
    
		<div class="card border-info mb-3" style="max-width: 28rem;">
		<div class="card-header"><h3><strong>Login</strong></h3></div>
		<div class="card-body">
	
		<form method="post" action="alteraBd.php">
			<div class="form-group">
				<label for="login"><h4>E-mail</h4></label>
				<input type="text" class="form-control" name="login" value="<?=$_SESSION['login']?>" readonly>
			</div>
			<div class="form-group">
				<label for="senha"><h4>Nova Senha</h4></label>
				<input type="password" class="form-control" name="senha1">
			</div>
			<div class="form-group">
				<label for="senha"><h4>Repita Nova Senha</h4></label>
				<input type="password" class="form-control" name="senha2">
			</div>
		
			<label ><h4>Deseja mesmo alterar senha ?</h4></label>
				<select name = "escolha1">
					<option name = "sim" value = "sim"> Sim</option>
					<option name = "nao" value = "não"> não</option>
				</select>
				<br>
				<br>
			<button type="submit"  class='btn btn-info' id="alterarBt">Alterar</button>
		</form>

		</div>
	</main>
</center>

<?php
    include "rodape.php";
?>