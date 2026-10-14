<?php
$a = $_POST['numero1'];
$b = $_POST['numero2'];
$c = $_POST['numero3'];
$d = $_POST['numero4'];
$e = $_POST['numero5'];

$maior_valor = max($a, $b, $c, $d, $e);
$menor_valor = min($a, $b, $c, $d, $e);

echo "Valores comparados: $a, $b, $c, $d, $e : <br>";
echo "O maior valor: $maior_valor <br>";
echo "O menor valor: $menor_valor <br>"; 