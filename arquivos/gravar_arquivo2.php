<?php
    file_put_contents("log.txt", "Usuário acessou em " . date("d/m/Y h:i:s") . "\n" , FILE_APPEND);
    echo" Usuário gravado com xuxesso!!!!";
?>