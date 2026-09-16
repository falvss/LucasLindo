<?php
// ==========================================================
// Exercicio 4 - Media de Valores
// ==========================================================

$soma = 0;       // acumulador
$quantidade = 0;  // contador

echo "Digite 0 para encerrar." . PHP_EOL;

while (true) {
    echo "Informe um numero: ";
    $numero = (float) readline();

    if ($numero == 0) {
        break; // condicao de parada
    }

    $soma += $numero;
    $quantidade++;
}

echo PHP_EOL;
echo "Quantidade de valores: " . $quantidade . PHP_EOL;

if ($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "Soma: " . number_format($soma, 2, ',', '.') . PHP_EOL;
    echo "Media: " . number_format($media, 2, ',', '.') . PHP_EOL;
} else {
    echo "Nenhum valor valido foi informado." . PHP_EOL;
}
