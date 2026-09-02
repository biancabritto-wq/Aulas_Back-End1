<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Soma</title></head>
<body>
    <h2>Soma de Dois Números</h2>
    <form method="post" action="soma.php">
        Número 1: <input type="number" step="any" name="1" required><br><br>
        Número 2: <input type="number" step="any" name="2" required><br><br>
        <button type="submit">Somar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = somar($_POST['1'], $_POST['2']);
        echo "<h3>Resultado da Soma: $resultado</h3>";
    }
    ?>
</body>
</html>