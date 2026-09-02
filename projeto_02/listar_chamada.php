<?php
$arquivo = fopen("alunos.txt", "r");
while (!feof($arquivo)) {
    $linha = fgets($arquivo);
    echo $linha . "<br>";
}
fclose($arquivo);
?>