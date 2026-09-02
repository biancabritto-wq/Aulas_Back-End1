<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>IMC</title></head>
<body>
    <h2>Cálculo de IMC</h2>
    <form method="post" action="imc.php">
        Peso (kg): <input type="number" step="0.1" name="peso" required><br><br>
        Altura (m): <input type="number" step="0.01" name="altura" required><br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = calcularIMC($_POST['peso'], $_POST['altura']);
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>