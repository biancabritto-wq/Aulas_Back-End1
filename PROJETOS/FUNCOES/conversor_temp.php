<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Conversor de Temperatura</title></head>
<body>
    <h2>Celsius para Fahrenheit</h2>
    <form method="post" action="conversor_temp.php">
        Temperatura (°C): <input type="number" step="any" name="celsius" required><br><br>
        <button type="submit">Converter</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = converterCelsiusParaFahrenheit($_POST['celsius']);
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>