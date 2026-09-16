<?php
// ==========================================================
// Missao 7 - Delivery SENAC
// ==========================================================

function listarPedido($itens) {
    echo "===== PEDIDO =====" . PHP_EOL;
    foreach ($itens as $item) {
        $subtotal = calcularSubtotal($item);
        echo $item["produto"] . PHP_EOL;
        echo $item["quantidade"] . " x R$ " . number_format($item["preco"], 2, ',', '.') . PHP_EOL;
        echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
    }
}

function calcularSubtotal($item) {
    return $item["preco"] * $item["quantidade"];
}

function calcularTotal($itens) {
    $total = 0;
    foreach ($itens as $item) {
        $total += calcularSubtotal($item);
    }
    return $total;
}

function calcularDesconto($total) {
    return $total >= 100 ? $total * 0.10 : 0;
}

function mostrarResumo($total, $desconto) {
    echo PHP_EOL;
    echo "Total do pedido: R$ " . number_format($total, 2, ',', '.') . PHP_EOL;
    echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . PHP_EOL;
    echo "TOTAL FINAL: R$ " . number_format($total - $desconto, 2, ',', '.') . PHP_EOL;
}

// ---------- Programa principal ----------
$itens = [
    ["produto" => "Hamburguer", "preco" => 25, "quantidade" => 2],
    ["produto" => "Refrigerante", "preco" => 8, "quantidade" => 1],
];

listarPedido($itens);

$total = calcularTotal($itens);
$desconto = calcularDesconto($total);
mostrarResumo($total, $desconto);
