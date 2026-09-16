<?php
// ==========================================================
// Exercicio 5 - Analise da Turma
// ==========================================================

echo "Quantidade de alunos: ";
$qtdAlunos = (int) readline();

$somaNotas = 0;      // acumulador
$maiorNota = null;
$menorNota = null;
$aprovados = 0;       // contador
$reprovados = 0;      // contador

for ($i = 1; $i <= $qtdAlunos; $i++) {
    echo "Nome: ";
    $nome = readline();

    echo "Nota: ";
    $nota = (float) readline();

    $somaNotas += $nota;

    if ($maiorNota === null || $nota > $maiorNota) {
        $maiorNota = $nota;
    }
    if ($menorNota === null || $nota < $menorNota) {
        $menorNota = $nota;
    }

    if ($nota >= 7) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}

echo PHP_EOL;

if ($qtdAlunos > 0) {
    $mediaTurma = $somaNotas / $qtdAlunos;

    echo "Media da turma: " . number_format($mediaTurma, 2, ',', '.') . PHP_EOL;
    echo "Maior nota: " . number_format($maiorNota, 2, ',', '.') . PHP_EOL;
    echo "Menor nota: " . number_format($menorNota, 2, ',', '.') . PHP_EOL;
    echo "Aprovados: " . $aprovados . PHP_EOL;
    echo "Reprovados: " . $reprovados . PHP_EOL;
} else {
    echo "Nenhum aluno cadastrado." . PHP_EOL;
}
