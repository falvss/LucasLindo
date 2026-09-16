<?php
// ==========================================================
// Missao 5 - Sistema de Pedido Delivery
// ==========================================================

echo "Nome do cliente: ";
$cliente = readline();

echo "Produto: ";
$produto = readline();

echo "Valor unitario: ";
$valorUnitario = (float) readline();

echo "Quantidade: ";
$quantidade = (int) readline();

echo "Forma de pagamento (dinheiro, cartao, pix): ";
$formaPagamento = strtolower(trim(readline()));

echo "Distancia da entrega (km): ";
$distancia = (float) readline();

$codigoPedido = rand(1000, 9999);
$dataPedido = date('d/m/Y H:i');

// Validacoes
if ($valorUnitario <= 0 || $quantidade <= 0 || $distancia < 0) {
    echo PHP_EOL . "Dados invalidos. Nao e possivel calcular o pedido." . PHP_EOL;
} else {
    // Subtotal
    $subtotal = $valorUnitario * $quantidade;

    // Regra de frete
    if ($distancia <= 3) {
        $frete = 5.00;
    } elseif ($distancia <= 8) {
        $frete = 10.00;
    } else {
        $frete = 18.00;
    }

    // Regra de desconto pelo subtotal
    if ($subtotal >= 200) {
        $percentualDesconto = 10;
    } elseif ($subtotal >= 100) {
        $percentualDesconto = 5;
    } else {
        $percentualDesconto = 0;
    }

    // Desconto adicional para pagamento PIX (comparacao estrita)
    if ($formaPagamento === "pix") {
        $percentualDesconto += 2;
    }

    $valorDesconto = $subtotal * ($percentualDesconto / 100);
    $totalPedido = ($subtotal - $valorDesconto) + $frete;

    echo PHP_EOL;
    echo "===== COMPROVANTE DO PEDIDO =====" . PHP_EOL;
    echo "Codigo do pedido: " . $codigoPedido . PHP_EOL;
    echo "Data: " . $dataPedido . PHP_EOL;
    echo "Cliente: " . $cliente . PHP_EOL;
    echo "Produto: " . $produto . PHP_EOL;
    echo "Quantidade: " . $quantidade . PHP_EOL;
    echo "Valor unitario: R$ " . number_format($valorUnitario, 2, ',', '.') . PHP_EOL;
    echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
    echo "Distancia: " . number_format($distancia, 2, ',', '.') . " km" . PHP_EOL;
    echo "Frete: R$ " . number_format($frete, 2, ',', '.') . PHP_EOL;
    echo "Forma de pagamento: " . ucfirst($formaPagamento) . PHP_EOL;
    echo "Percentual de desconto: " . $percentualDesconto . "%" . PHP_EOL;
    echo "Valor do desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . PHP_EOL;
    echo "VALOR TOTAL DO PEDIDO: R$ " . number_format($totalPedido, 2, ',', '.') . PHP_EOL;
}
