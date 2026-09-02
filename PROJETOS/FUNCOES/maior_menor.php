<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Maior e Menor</title></head>
<body>
    <h2>Verificar Maior e Menor</h2>
    <form method="post" action="maior_menor.php">
        Número 1: <input type="number" step="any" name="n1" required><br><br>
        Número 2: <input type="number" step="any" name="n2" required><br><br>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = verificarMaiorMenor($_POST['n1'], $_POST['n2']);
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>