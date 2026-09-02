<?php
$nome = $_POST['nome'];
$sala = $_POST['sala'];
$ra   = $_POST['ra'];

$arquivo = fopen("alunos.txt", "a");
fwrite($arquivo, $nome . " - Sala: " . $sala . " - RA: " . $ra . "\n");
fclose($arquivo);
header("Location: listar_chamada.php");
?>