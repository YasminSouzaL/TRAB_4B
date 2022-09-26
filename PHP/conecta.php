<?php
   $host = 'localhost';
   $user = 'root';
   $password = '';
   $db = 'usuarios';
   
     @ $conn= mysqli_connect($host,$user,$password,$db); 
     if (!$conn)
     {
          die('<div class="alert alert-danger" >Erro de Conexão</div>');
     }
?>		  