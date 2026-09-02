<?php require_once 'funcao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Tabuada</title></head>
<body>
    <h2>Gerar Tabuada</h2>
    <form method="post" action="tabuada.php">
        Número: <input type="number" name="numero" required><br><br>
        <button type="submit">Gerar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h3>Tabuada do " . $_POST['numero'] . ":</h3>";
        echo gerarTabuada($_POST['numero']);
    }
    ?>
</body>
</html>