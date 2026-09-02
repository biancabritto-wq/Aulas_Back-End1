<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Média Das Notas</title></head>
<body>
    <h2>Média Aritmética</h2>
    <form method="post" action="media.php">
        Nota 1: <input type="number" step="any" name="a" required><br><br>
        Nota 2: <input type="number" step="any" name="b" required><br><br>
        Nota 3: <input type="number" step="any" name="c" required><br><br>
        <button type="submit">Calcular Média</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = calcularMedia($_POST['a'], $_POST['b'], $_POST['c']);
        echo "<h3>Média: $resultado</h3>";
    }
    ?>
</body>
</html>