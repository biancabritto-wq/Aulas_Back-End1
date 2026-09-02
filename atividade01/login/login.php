<?php
//login.php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario === "admin" && $senha === "1234") {
    //require "funcoes.php";
    header("Location: painel.php");
    exit; 
} else {
    echo "Usuário ou senha inválidas";
}
?>