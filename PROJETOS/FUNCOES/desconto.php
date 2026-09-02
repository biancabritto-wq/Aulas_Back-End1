<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Desconto</title></head>
<body>
    <h2>Cálculo de Desconto</h2>
    <form method="post" action="desconto.php">
        Valor Original: <input type="number" step="0.01" name="valor" required><br><br>
        Desconto (%): <input type="number" step="0.01" name="desconto" required><br><br>
        <button type="submit">Calcular Valor Final</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = calcularDesconto($_POST['valor'], $_POST['desconto']);
        echo "<h3>Valor Final com Desconto: $resultado</h3>";
    }
    ?>
</body>
</html>