<?php
// ==========================================================
// Missao 2 - Controle de Notas
// ==========================================================

function cadastrarNotas() {
    $notas = [];
    for ($i = 1; $i <= 5; $i++) {
        echo "Nota " . $i . ": ";
        $notas[] = (float) readline();
    }
    return $notas;
}

function listarNotas($notas) {
    echo PHP_EOL . "===== NOTAS =====" . PHP_EOL;
    foreach ($notas as $nota) {
        echo "- " . number_format($nota, 2, ',', '.') . PHP_EOL;
    }
}

function calcularMedia($notas) {
    $soma = 0;
    foreach ($notas as $nota) {
        $soma += $nota;
    }
    return $soma / count($notas);
}

function mostrarSituacao($media) {
    if ($media >= 7) {
        echo "Situacao geral: Bom desempenho" . PHP_EOL;
    } else {
        echo "Situacao geral: Turma precisa melhorar" . PHP_EOL;
    }
}

// ---------- Programa principal ----------
$notas = cadastrarNotas();
listarNotas($notas);

$soma = array_sum($notas);
$media = calcularMedia($notas);

echo "Soma das notas: " . number_format($soma, 2, ',', '.') . PHP_EOL;
echo "Media da turma: " . number_format($media, 2, ',', '.') . PHP_EOL;
echo "Quantidade de notas cadastradas: " . count($notas) . PHP_EOL;
mostrarSituacao($media);
