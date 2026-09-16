<?php
// ==========================================================
// Missao 1 - Classificacao Etaria
// ==========================================================

echo "Nome da pessoa: ";
$nome = readline();

echo "Idade: ";
$idade = (int) readline();

// A ordem das condicoes importa: da mais restritiva para a mais ampla
if ($idade <= 0) {
    $classificacao = "IDADE INVALIDA";
} elseif ($idade < 12) {
    $classificacao = "CRIANCA";
} elseif ($idade <= 17) {
    $classificacao = "ADOLESCENTE";
} elseif ($idade <= 59) {
    $classificacao = "ADULTO";
} else {
    $classificacao = "IDOSO";
}

echo PHP_EOL;
echo "===== CLASSIFICACAO =====" . PHP_EOL;
echo "Nome: " . $nome . PHP_EOL;
echo "Idade: " . $idade . PHP_EOL;
echo "Classificacao: " . $classificacao . PHP_EOL;
