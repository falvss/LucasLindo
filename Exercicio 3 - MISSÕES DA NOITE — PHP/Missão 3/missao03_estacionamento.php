<?php
// ==========================================================
// Missao 3 - Sistema de Estacionamento
// ==========================================================

echo "Nome do cliente: ";
$cliente = readline();

echo "Placa do veiculo: ";
$placa = readline();

echo "Tipo do veiculo (moto, carro, suv): ";
$tipoVeiculo = strtolower(trim(readline()));

echo "Quantidade de horas estacionadas: ";
$horas = (float) readline();

// Validacoes
$tiposValidos = ["moto", "carro", "suv"];

if ($horas <= 0) {
    echo PHP_EOL . "Quantidade de horas invalida. Deve ser maior que zero." . PHP_EOL;
} elseif (!in_array($tipoVeiculo, $tiposValidos)) {
    echo PHP_EOL . "Tipo de veiculo invalido." . PHP_EOL;
} else {
    // Valor por hora de acordo com o tipo
    if ($tipoVeiculo == "moto") {
        $valorHora = 5.00;
    } elseif ($tipoVeiculo == "carro") {
        $valorHora = 8.00;
    } else {
        $valorHora = 12.00;
    }

    $subtotal = $valorHora * $horas;

    // Desconto de 10% para permanencia acima de 8 horas
    if ($horas > 8) {
        $percentualDesconto = 10;
    } else {
        $percentualDesconto = 0;
    }

    $valorDesconto = $subtotal * ($percentualDesconto / 100);
    $totalFinal = $subtotal - $valorDesconto;

    $numeroAtendimento = rand(1000, 9999);
    $dataAtendimento = date('d/m/Y H:i');

    echo PHP_EOL;
    echo "===== COMPROVANTE DE ESTACIONAMENTO =====" . PHP_EOL;
    echo "Numero do atendimento: " . $numeroAtendimento . PHP_EOL;
    echo "Data: " . $dataAtendimento . PHP_EOL;
    echo "Cliente: " . $cliente . PHP_EOL;
    echo "Placa: " . $placa . PHP_EOL;
    echo "Tipo do veiculo: " . ucfirst($tipoVeiculo) . PHP_EOL;
    echo "Quantidade de horas: " . $horas . PHP_EOL;
    echo "Valor por hora: R$ " . number_format($valorHora, 2, ',', '.') . PHP_EOL;
    echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
    echo "Percentual de desconto: " . $percentualDesconto . "%" . PHP_EOL;
    echo "Valor do desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . PHP_EOL;
    echo "TOTAL FINAL: R$ " . number_format($totalFinal, 2, ',', '.') . PHP_EOL;
}
