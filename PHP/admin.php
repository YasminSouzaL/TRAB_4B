<?php
    session_start();
	
    include "cabecalho.php";
	
    echo '<br>
	      <center>
           <main>

	<div class="card border-info mb-3" style="max-width: 50rem;">
	<div class="card-header"><h3><strong>Olá Administrador : '.$_SESSION['nome'].'</strong></h3></div>
	<div class="card-body">
  
		  <h4 class="text-center">Como Usuário Administrador você pode excluir usuários por login ou  alterar usuários pelo nome</h4>
		  

<br>';
	
    echo "<table class = 'table table-striped table-bordered'>";
	
    include "conecta.php";
	
    $resultado = mysqli_query($conn, "select * from usuario");

    while($usuario = mysqli_fetch_assoc($resultado)) {
		
		echo "<form action='AlteraAdmin.php' method='post'><tr><td>         
				 <input type='text' name='id1' 
                       value=".$usuario['nome']."
                  </td>
                  <td>     
                       <input type='text' name='id' 
                       value=".$usuario['login'].">      
                       
                    </td>";
                       
		 echo " <td><button class='btn btn-info'>alterar</button></td></tr></form>";
		 
		 echo "<form action='remove.php' method='post'><tr><td>
                <input type='text' name='id' 
                       value=".$usuario['login'].">  </td>";
			    
        echo "  <td><button class='btn btn-info'>excluir</button></td></tr> </form>";
    }
    echo "</table> </div>
</main>
</center>";

    include "rodape.php";
?>
    