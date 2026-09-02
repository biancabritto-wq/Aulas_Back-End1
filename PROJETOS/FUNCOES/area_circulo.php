<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Área do Círculo</title></head>
<body>
    <h2>Área do Círculo</h2>
    <form method="post" action="area_circulo.php">
        Raio: <input type="number" step="any" name="raio" required><br><br>
        <button type="submit">Calcular Área</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = calcularAreaCirculo($_POST['raio']);
        echo "<h3>Área: $resultado</h3>";
    }
    ?>
</body>
</html>