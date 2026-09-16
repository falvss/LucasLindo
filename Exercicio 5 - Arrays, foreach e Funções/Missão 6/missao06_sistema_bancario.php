<?php
// ==========================================================
// Missao 6 - Sistema Bancario
// ==========================================================

function listarExtrato($movimentacoes) {
    echo "===== EXTRATO =====" . PHP_EOL;
    foreach ($movimentacoes as $mov) {
        echo ucfirst($mov["tipo"]) . ": R$ " . number_format($mov["valor"], 2, ',', '.') . PHP_EOL;
    }
}

function calcularDepositos($movimentacoes) {
    $total = 0;
    foreach ($movimentacoes as $mov) {
        if ($mov["tipo"] == "deposito") {
            $total += $mov["valor"];
        }
    }
    return $total;
}

function calcularSaques($movimentacoes) {
    $total = 0;
    foreach ($movimentacoes as $mov) {
        if ($mov["tipo"] == "saque") {
            $total += $mov["valor"];
        }
    }
    return $total;
}

function calcularSaldo($movimentacoes) {
    return calcularDepositos($movimentacoes) - calcularSaques($movimentacoes);
}

// ---------- Programa principal ----------
// Movimentacoes de exemplo (poderiam vir de um cadastro via readline)
$movimentacoes = [
    ["tipo" => "deposito", "valor" => 1000],
    ["tipo" => "saque", "valor" => 250],
    ["tipo" => "deposito", "valor" => 500],
    ["tipo" => "saque", "valor" => 120],
];

listarExtrato($movimentacoes);

echo PHP_EOL;
echo "Total depositado: R$ " . number_format(calcularDepositos($movimentacoes), 2, ',', '.') . PHP_EOL;
echo "Total sacado: R$ " . number_format(calcularSaques($movimentacoes), 2, ',', '.') . PHP_EOL;
echo "Saldo final: R$ " . number_format(calcularSaldo($movimentacoes), 2, ',', '.') . PHP_EOL;
