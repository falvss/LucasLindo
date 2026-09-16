<?php
// ==========================================================
// Missao 9 - Loja SENAC
// ==========================================================

function cadastrarProdutos() {
    $produtos = [];
    for ($i = 1; $i <= 5; $i++) {
        echo "--- Produto " . $i . " ---" . PHP_EOL;
        echo "Nome: ";
        $nome = readline();
        echo "Preco: ";
        $preco = (float) readline();
        echo "Estoque: ";
        $estoque = (int) readline();

        $produtos[] = ["nome" => $nome, "preco" => $preco, "estoque" => $estoque];
    }
    return $produtos;
}

function listarProdutos($produtos) {
    echo PHP_EOL . "========= LOJA SENAC =========" . PHP_EOL;
    echo "PRODUTOS" . PHP_EOL;
    foreach ($produtos as $produto) {
        echo $produto["nome"] . PHP_EOL;
        echo "Preco: R$ " . number_format($produto["preco"], 2, ',', '.') . PHP_EOL;
        echo "Estoque: " . $produto["estoque"] . PHP_EOL;
    }
    echo "==============================" . PHP_EOL;
}

function calcularUnidadesEmEstoque($produtos) {
    $total = 0;
    foreach ($produtos as $produto) {
        $total += $produto["estoque"];
    }
    return $total;
}

function calcularValorEstoque($produtos) {
    $total = 0;
    foreach ($produtos as $produto) {
        $total += $produto["preco"] * $produto["estoque"];
    }
    return $total;
}

function encontrarProdutoMaisCaro($produtos) {
    $maisCaro = $produtos[0];
    foreach ($produtos as $produto) {
        if ($produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }
    }
    return $maisCaro;
}

function listarEstoqueBaixo($produtos) {
    echo PHP_EOL . "PRODUTOS COM ESTOQUE BAIXO (< 5 unidades)" . PHP_EOL;
    foreach ($produtos as $produto) {
        if ($produto["estoque"] < 5) {
            echo $produto["nome"] . PHP_EOL;
        }
    }
}

function listarProdutosCaros($produtos) {
    echo PHP_EOL . "PRODUTOS ACIMA DE R$ 100,00" . PHP_EOL;
    foreach ($produtos as $produto) {
        if ($produto["preco"] > 100) {
            echo $produto["nome"] . PHP_EOL;
        }
    }
}

// ---------- Programa principal ----------
$produtos = cadastrarProdutos();
listarProdutos($produtos);

$maisCaro = encontrarProdutoMaisCaro($produtos);

echo "Produtos cadastrados: " . count($produtos) . PHP_EOL;
echo "Unidades em estoque: " . calcularUnidadesEmEstoque($produtos) . PHP_EOL;
echo "Valor do estoque: R$ " . number_format(calcularValorEstoque($produtos), 2, ',', '.') . PHP_EOL;
echo "Produto mais caro: " . $maisCaro["nome"] . " (R$ " . number_format($maisCaro["preco"], 2, ',', '.') . ")" . PHP_EOL;

listarEstoqueBaixo($produtos);
listarProdutosCaros($produtos);
