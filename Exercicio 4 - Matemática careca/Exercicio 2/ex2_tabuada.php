<?php
// ==========================================================
// Exercicio 2 - Tabuada
// ==========================================================

echo "Informe um numero para a tabuada: ";
$numero = (int) readline();

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado . PHP_EOL;
}
