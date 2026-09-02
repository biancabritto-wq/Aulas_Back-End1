<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Fatorial</title></head>
<body>
    <h2>Cálculo de Fatorial</h2>
    <form method="post" action="fatorial.php">
        Número: <input type="number" name="numero" required><br><br>
        <button type="submit">Calcular Fatorial</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = calcularFatorial($_POST['numero']);
        echo "<h3>Fatorial: $resultado</h3>";
    }
    ?>
</body>
</html>