<?php
// ==========================================================
// Missao 10 - Mini Sistema de Vendas
// ==========================================================

// Catalogo fixo de produtos disponiveis
$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 150],
];

function buscarProduto($produtos, $nomeProcurado) {
    foreach ($produtos as $produto) {
        if (strtolower($produto["nome"]) == strtolower($nomeProcurado)) {
            return $produto;
        }
    }
    return null;
}

function cadastrarVendas($produtos) {
    $vendas = [];

    echo "Produtos disponiveis: ";
    $nomes = [];
    foreach ($produtos as $produto) {
        $nomes[] = $produto["nome"];
    }
    echo implode(", ", $nomes) . PHP_EOL;

    echo "Quantas vendas deseja registrar? ";
    $qtdVendas = (int) readline();

    for ($i = 1; $i <= $qtdVendas; $i++) {
        echo "--- Venda " . $i . " ---" . PHP_EOL;
        echo "Produto: ";
        $nomeProduto = readline();

        $produtoEncontrado = buscarProduto($produtos, $nomeProduto);

        if ($produtoEncontrado === null) {
            echo "Produto nao encontrado no catalogo. Venda ignorada." . PHP_EOL;
            continue;
        }

        echo "Quantidade: ";
        $quantidade = (int) readline();

        $vendas[] = ["produto" => $produtoEncontrado["nome"], "quantidade" => $quantidade];
    }

    return $vendas;
}

function calcularVenda($produtos, $venda) {
    $produtoEncontrado = buscarProduto($produtos, $venda["produto"]);
    $valorUnitario = $produtoEncontrado["preco"];
    $totalVenda = $valorUnitario * $venda["quantidade"];

    return [
        "produto" => $venda["produto"],
        "quantidade" => $venda["quantidade"],
        "valorUnitario" => $valorUnitario,
        "total" => $totalVenda,
    ];
}

function listarVendas($produtos, $vendas) {
    echo PHP_EOL . "========== VENDAS ==========" . PHP_EOL;
    foreach ($vendas as $venda) {
        $detalhe = calcularVenda($produtos, $venda);
        echo $detalhe["produto"] . PHP_EOL;
        echo "Quantidade: " . $detalhe["quantidade"] . PHP_EOL;
        echo "Valor unitario: R$ " . number_format($detalhe["valorUnitario"], 2, ',', '.') . PHP_EOL;
        echo "Total: R$ " . number_format($detalhe["total"], 2, ',', '.') . PHP_EOL;
        echo "-----------------------------" . PHP_EOL;
    }
}

function calcularFaturamento($produtos, $vendas) {
    $faturamento = 0;
    foreach ($vendas as $venda) {
        $detalhe = calcularVenda($produtos, $venda);
        $faturamento += $detalhe["total"];
    }
    return $faturamento;
}

function mostrarRelatorio($produtos, $vendas) {
    listarVendas($produtos, $vendas);
    $faturamento = calcularFaturamento($produtos, $vendas);
    echo "=============================" . PHP_EOL;
    echo "FATURAMENTO: R$ " . number_format($faturamento, 2, ',', '.') . PHP_EOL;
}

// ---------- Programa principal ----------
$vendas = cadastrarVendas($produtos);
mostrarRelatorio($produtos, $vendas);
