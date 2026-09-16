<?php
// ==========================================================
// Missao 5 - Controle de Estoque
// ==========================================================

function cadastrarProdutos() {
    $produtos = [];
    for ($i = 1; $i <= 5; $i++) {
        echo "--- Produto " . $i . " ---" . PHP_EOL;
        echo "Nome: ";
        $nome = readline();
        echo "Preco: ";
        $preco = (float) readline();
        echo "Quantidade: ";
        $quantidade = (int) readline();

        $produtos[] = [
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade,
        ];
    }
    return $produtos;
}

function calcularValorProduto($produto) {
    return $produto["preco"] * $produto["quantidade"];
}

function listarEstoque($produtos) {
    echo PHP_EOL . "===== ESTOQUE =====" . PHP_EOL;
    foreach ($produtos as $produto) {
        $valor = calcularValorProduto($produto);
        echo $produto["nome"] . PHP_EOL;
        echo "Preco: R$ " . number_format($produto["preco"], 2, ',', '.') . PHP_EOL;
        echo "Quantidade: " . $produto["quantidade"] . PHP_EOL;
        echo "Valor em estoque: R$ " . number_format($valor, 2, ',', '.') . PHP_EOL;
        echo "--------------------" . PHP_EOL;
    }
}

function calcularValorEstoque($produtos) {
    $total = 0;
    foreach ($produtos as $produto) {
        $total += calcularValorProduto($produto);
    }
    return $total;
}

// ---------- Programa principal ----------
$produtos = cadastrarProdutos();
listarEstoque($produtos);

echo "VALOR TOTAL DO ESTOQUE: R$ " . number_format(calcularValorEstoque($produtos), 2, ',', '.') . PHP_EOL;
