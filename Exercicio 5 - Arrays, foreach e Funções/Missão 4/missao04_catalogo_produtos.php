<?php
// ==========================================================
// Missao 4 - Catalogo de Produtos
// ==========================================================

function cadastrarProdutos() {
    $produtos = [];
    for ($i = 1; $i <= 5; $i++) {
        echo "--- Produto " . $i . " ---" . PHP_EOL;
        echo "Nome: ";
        $nome = readline();
        echo "Preco: ";
        $preco = (float) readline();

        $produtos[] = [
            "nome" => $nome,
            "preco" => $preco,
        ];
    }
    return $produtos;
}

function listarProdutos($produtos) {
    echo PHP_EOL . "===== PRODUTOS =====" . PHP_EOL;
    foreach ($produtos as $produto) {
        echo $produto["nome"] . " - R$ " . number_format($produto["preco"], 2, ',', '.') . PHP_EOL;
    }
}

function calcularTotal($produtos) {
    $total = 0;
    foreach ($produtos as $produto) {
        $total += $produto["preco"];
    }
    return $total;
}

function calcularMedia($produtos) {
    return calcularTotal($produtos) / count($produtos);
}

function listarProdutosCaros($produtos) {
    echo PHP_EOL . "===== PRODUTOS A PARTIR DE R$ 100,00 =====" . PHP_EOL;
    foreach ($produtos as $produto) {
        if ($produto["preco"] >= 100) {
            echo "- " . $produto["nome"] . " (R$ " . number_format($produto["preco"], 2, ',', '.') . ")" . PHP_EOL;
        }
    }
}

// ---------- Programa principal ----------
$produtos = cadastrarProdutos();
listarProdutos($produtos);

echo PHP_EOL;
echo "Quantidade de produtos: " . count($produtos) . PHP_EOL;
echo "Soma dos precos: R$ " . number_format(calcularTotal($produtos), 2, ',', '.') . PHP_EOL;
echo "Preco medio: R$ " . number_format(calcularMedia($produtos), 2, ',', '.') . PHP_EOL;

listarProdutosCaros($produtos);
