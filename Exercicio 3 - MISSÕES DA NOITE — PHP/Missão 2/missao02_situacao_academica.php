<?php
// ==========================================================
// Missao 2 - Situacao Academica
// ==========================================================

echo "Nome do aluno: ";
$nome = readline();

echo "Primeira nota: ";
$nota1 = (float) readline();

echo "Segunda nota: ";
$nota2 = (float) readline();

echo "Frequencia (%): ";
$frequencia = (float) readline();

// Validacao dos dados antes de qualquer calculo
$notasValidas = ($nota1 >= 0 && $nota1 <= 10) && ($nota2 >= 0 && $nota2 <= 10);
$frequenciaValida = ($frequencia >= 0 && $frequencia <= 100);

if (!$notasValidas || !$frequenciaValida) {
    echo PHP_EOL;
    echo "Dados invalidos. Notas devem estar entre 0 e 10 e frequencia entre 0 e 100." . PHP_EOL;
} else {
    $media = ($nota1 + $nota2) / 2;

    if ($frequencia < 75) {
        $situacao = "REPROVADO POR FREQUENCIA";
    } elseif ($media >= 7) {
        $situacao = "APROVADO";
    } elseif ($media >= 4 && $media < 7) {
        $situacao = "RECUPERACAO";
    } else {
        $situacao = "REPROVADO POR NOTA";
    }

    echo PHP_EOL;
    echo "===== SITUACAO ACADEMICA =====" . PHP_EOL;
    echo "Aluno: " . $nome . PHP_EOL;
    echo "Nota 1: " . number_format($nota1, 2, ',', '.') . PHP_EOL;
    echo "Nota 2: " . number_format($nota2, 2, ',', '.') . PHP_EOL;
    echo "Media: " . number_format($media, 2, ',', '.') . PHP_EOL;
    echo "Frequencia: " . number_format($frequencia, 2, ',', '.') . "%" . PHP_EOL;
    echo "Situacao: " . $situacao . PHP_EOL;

    // Nota: um aluno com media 9 e frequencia 60% NAO fica aprovado,
    // pois a regra de frequencia minima (75%) e verificada primeiro.
}
