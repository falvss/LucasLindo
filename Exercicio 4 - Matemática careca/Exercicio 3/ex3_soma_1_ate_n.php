<?php
// ==========================================================
// Exercicio 3 - Soma de 1 ate N
// ==========================================================

echo "Informe um numero: ";
$numero = (int) readline();

if ($numero <= 0) {
    echo "O numero deve ser maior que zero." . PHP_EOL;
} else {
    $soma = 0; // acumulador
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }

    echo "A soma de 1 ate " . $numero . " e " . $soma . "." . PHP_EOL;
}
