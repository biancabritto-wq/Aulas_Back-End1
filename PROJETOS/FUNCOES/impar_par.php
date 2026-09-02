<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Ímpar ou Par</title></head>
<body>
    <h2>Ímpar ou Par</h2>
    <form method="post" action="impar_par.php">
        Número: <input type="number" name="numero" required><br><br>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $resultado = verificarImparPar($_POST['numero']);
        echo "<h3>O número é: $resultado</h3>";
    }
    ?>
</body>
</html>