<?php 

if (isset($_POST["acao"])){ 

   $usuario=$_POST["usuario"]; 
   $senha=$_POST["senha"];
   
   echo "<h1>Boas-vindas</h1><br>";
   echo "<p>Olá seja bem-vindo(a), seu usuário é: ".$usuario."</p>";
   echo "<p>Sua senha é ".$senha."</p>";

} 
?>