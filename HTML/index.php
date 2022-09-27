<?php
    session_start();
    include "../PHP/cabecalho.php";
?>


<?php 
    if (isset($_SESSION['login'])){

        echo '<br><center><main>
		      <div class="card border-info mb-3" style="max-width: 24rem;">
				<div class="card-header" ><h3><strong>Login</strong></h3></div>
				<div class="card-body"><h4>Bem-vindo '.$_SESSION['nome'].'!! </h2></div></main></center>';
    }
    else{
        echo '<br>
			  <br>
			  <header>
				<div class="collapse bg-dark " id="navbarHeader" >
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-7 py-4">
							<h4 class="text-white">Sobre</h4>
							<p class="text-muted">Neste site , você pode se cadastrar e realizar login e checar seu perfil. Agumas informações : o usuário administrador poder ver e excluir seus  dados caso seja necessário  </p>
						</div>
					</div>
				</div>
				</div>
				<div class="navbar navbar-dark bg-dark shadow-sm border-info ">
				<div class="container">
					<a href="#" class="navbar-brand d-flex align-items-center">
					<strong>Website de feedback do Transporte Público de Campinas</strong>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				</div>
			  </header>
			<br>
			<br>
			<center>
				<h1 class="text-center" ><strong>Autenticação</strong></h1>
                <br>
				<div class="card border-info mb-3" style="max-width: 24rem;">
				<div class="card-header" ><h3><strong>Login</strong></h3></div>
				<div class="card-body">
					<h4 class="alert-heading">Você não está autenticado  </h4>
					<p> Aperte em Continue para ir à tela de login</p></div></div>';
					
    } 
		
?>


<p class="text-center">
    <a class="btn btn-outline-primary col-4 border-info" id="loginButton" href="../PHP/login.php">Continue</a>
</p>

<?php
  include "../PHP/rodape.php";
?>