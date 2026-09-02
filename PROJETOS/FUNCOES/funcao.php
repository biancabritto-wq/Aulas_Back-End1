<?php
// 1. Cálculo de IMC
function calcularIMC($peso, $altura) {
    if ($altura <= 0) return "Altura deve ser maior que zero.";
    $imc = $peso / ($altura * $altura);
    return number_format($imc, 2);
}

// 2. Maior e Menor Número
function verificarMaiorMenor($n1, $n2) {
    if ($n1 > $n2) {
        return "Maior: $n1 | Menor: $n2";
    } elseif ($n2 > $n1) {
        return "Maior: $n2 | Menor: $n1";
    }
    return "Os dois números são iguais.";
}

// 3. Ímpar ou Par
function verificarImparPar($numero) {
    return ($numero % 2 == 0) ? "Par" : "Ímpar";
}

// 4. Média Aritmética
function calcularMedia($a, $b, $c) {
    $media = ($a + $b + $c) / 3;
    return number_format($media, 2);
}

// 5. Fatorial
function calcularFatorial($n) {
    if ($n < 0) return "Não existe fatorial de número negativo.";
    $fatorial = 1;
    for ($i = $n; $i > 1; $i--) {
        $fatorial *= $i;
    }
    return $fatorial;
}

// 6. Soma de dois números
function somar($a, $b) {
    return $a + $b;
}

// 7. Área do Círculo
function calcularAreaCirculo($raio) {
    $area = pi() * pow($raio, 2);
    return number_format($area, 2);
}

// 8. Conversor de Temperatura (Celsius para Fahrenheit)
function converterCelsiusParaFahrenheit($celsius) {
    $f = ($celsius * 9 / 5) + 32;
    return number_format($f, 2) . " °F";
}

// 9. Tabuada
function gerarTabuada($numero) {
    $resultado = "";
    for ($i = 1; $i <= 10; $i++) {
        $res = $numero * $i;
        $resultado .= "$numero x $i = $res<br>";
    }
    return $resultado;
}

// 10. Desconto
function calcularDesconto($valor, $descontoPercentual) {
    $valorFinal = $valor - ($valor * $descontoPercentual / 100);
    return "R$ " . number_format($valorFinal, 2, ',', '.');
}
?>