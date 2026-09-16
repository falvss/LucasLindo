<?php
// ==========================================================
// Exercicio 1 - Contagem Crescente
// ==========================================================

echo "Informe um numero: ";
$numero = (int) readline();

if ($numero <= 0) {
    echo "O numero deve ser maior que zero." . PHP_EOL;
} else {
    $contador = 1;
    while ($contador <= $numero) {
        echo $contador . PHP_EOL;
        $contador++;
    }
}
