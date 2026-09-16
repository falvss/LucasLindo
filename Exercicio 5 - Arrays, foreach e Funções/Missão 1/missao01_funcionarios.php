<?php
// ==========================================================
// Missao 1 - Lista de Funcionarios
// ==========================================================

function cadastrarFuncionarios() {
    $funcionarios = [];
    for ($i = 1; $i <= 5; $i++) {
        echo "Nome do funcionario " . $i . ": ";
        $nome = readline();
        $funcionarios[] = $nome;
    }
    return $funcionarios;
}

function listarFuncionarios($funcionarios) {
    echo PHP_EOL . "===== FUNCIONARIOS =====" . PHP_EOL;
    foreach ($funcionarios as $nome) {
        echo "- " . $nome . PHP_EOL;
    }
}

function contarFuncionarios($funcionarios) {
    return count($funcionarios);
}

// ---------- Programa principal ----------
$funcionarios = cadastrarFuncionarios();
listarFuncionarios($funcionarios);
echo "Total cadastrado: " . contarFuncionarios($funcionarios) . PHP_EOL;
