<?php
// ==========================================================
// Missao 4 - Simulador de Emprestimo
// ==========================================================

echo "Nome do cliente: ";
$cliente = readline();

echo "Salario mensal: ";
$salario = (float) readline();

echo "Valor do emprestimo solicitado: ";
$valorSolicitado = (float) readline();

echo "Quantidade de parcelas: ";
$qtdParcelas = (int) readline();

// Validacoes antes de qualquer calculo
if ($salario <= 0 || $valorSolicitado <= 0 || $qtdParcelas <= 0) {
    echo PHP_EOL . "Dados invalidos. Salario, valor solicitado e parcelas devem ser maiores que zero." . PHP_EOL;
} else {
    // So calcula a parcela depois de validar a quantidade de parcelas
    $valorParcela = $valorSolicitado / $qtdParcelas;
    $limiteParcela = $salario * 0.30;

    if ($valorParcela <= $limiteParcela) {
        $resultado = "EMPRESTIMO PRE-APROVADO";
    } else {
        $resultado = "EMPRESTIMO NAO APROVADO";
    }

    $codigoSimulacao = rand(10000, 99999);

    echo PHP_EOL;
    echo "===== SIMULACAO DE EMPRESTIMO =====" . PHP_EOL;
    echo "Codigo da simulacao: " . $codigoSimulacao . PHP_EOL;
    echo "Cliente: " . $cliente . PHP_EOL;
    echo "Salario: R$ " . number_format($salario, 2, ',', '.') . PHP_EOL;
    echo "Valor solicitado: R$ " . number_format($valorSolicitado, 2, ',', '.') . PHP_EOL;
    echo "Quantidade de parcelas: " . $qtdParcelas . PHP_EOL;
    echo "Valor da parcela: R$ " . number_format($valorParcela, 2, ',', '.') . PHP_EOL;
    echo "Limite de comprometimento (30%): R$ " . number_format($limiteParcela, 2, ',', '.') . PHP_EOL;
    echo "Resultado da analise: " . $resultado . PHP_EOL;
}
