<form method="POST" action="post_get_mesma_pagina.php">
    Cor: <br>
    <input type="text" name="cor" value=""><br>
    Tipo: <br>
    <input type="text" name="tipo" value=""><br>

    <input type="submit" value="Cadastrar">

</form>

<?php
   $cor = $_POST['cor'] ?? "";
   $tipo= $_POST['tipo'] ?? "";
   $produto= $_GET['produto']?? "(Não selecionado)";

   if(isset($_POST ["cor"])){
    //empty retorna null caso a variável já exista
    //isset retorna FALSE se não existir e TRUE se existir
   echo"A cor do $produto é $cor do tipo $tipo.";
    }
?>