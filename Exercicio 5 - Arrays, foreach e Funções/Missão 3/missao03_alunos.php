<?php
// ==========================================================
// Missao 3 - Cadastro Completo de Alunos
// ==========================================================

function cadastrarAlunos() {
    $alunos = [];
    for ($i = 1; $i <= 4; $i++) {
        echo "--- Aluno " . $i . " ---" . PHP_EOL;
        echo "Nome: ";
        $nome = readline();
        echo "Idade: ";
        $idade = (int) readline();
        echo "Nota: ";
        $nota = (float) readline();

        $aluno = [
            "nome" => $nome,
            "idade" => $idade,
            "nota" => $nota,
        ];

        $alunos[] = $aluno;
    }
    return $alunos;
}

function verificarSituacao($nota) {
    return $nota >= 7 ? "APROVADO" : "REPROVADO";
}

function listarAlunos($alunos) {
    echo PHP_EOL . "===== ALUNOS =====" . PHP_EOL;
    foreach ($alunos as $aluno) {
        echo "Nome: " . $aluno["nome"] . PHP_EOL;
        echo "Idade: " . $aluno["idade"] . PHP_EOL;
        echo "Nota: " . number_format($aluno["nota"], 2, ',', '.') . PHP_EOL;
        echo "Situacao: " . verificarSituacao($aluno["nota"]) . PHP_EOL;
        echo "---------------------" . PHP_EOL;
    }
}

// ---------- Programa principal ----------
$alunos = cadastrarAlunos();
listarAlunos($alunos);
