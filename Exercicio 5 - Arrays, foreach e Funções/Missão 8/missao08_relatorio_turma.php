<?php
// ==========================================================
// Missao 8 - Relatorio da Turma
// ==========================================================

function cadastrarAlunos() {
    $alunos = [];
    for ($i = 1; $i <= 5; $i++) {
        echo "--- Aluno " . $i . " ---" . PHP_EOL;
        echo "Nome: ";
        $nome = readline();
        echo "Nota: ";
        $nota = (float) readline();

        $alunos[] = ["nome" => $nome, "nota" => $nota];
    }
    return $alunos;
}

function listarAlunos($alunos) {
    echo PHP_EOL . "===== RELATORIO =====" . PHP_EOL;
    foreach ($alunos as $aluno) {
        $situacao = $aluno["nota"] >= 7 ? "APROVADO" : "REPROVADO";
        echo $aluno["nome"] . " - " . number_format($aluno["nota"], 1, ',', '.') . " - " . $situacao . PHP_EOL;
    }
}

function calcularMedia($alunos) {
    $soma = 0;
    foreach ($alunos as $aluno) {
        $soma += $aluno["nota"];
    }
    return $soma / count($alunos);
}

function contarAprovados($alunos) {
    $total = 0;
    foreach ($alunos as $aluno) {
        if ($aluno["nota"] >= 7) {
            $total++;
        }
    }
    return $total;
}

function contarReprovados($alunos) {
    $total = 0;
    foreach ($alunos as $aluno) {
        if ($aluno["nota"] < 7) {
            $total++;
        }
    }
    return $total;
}

function mostrarResumo($media, $aprovados, $reprovados) {
    echo PHP_EOL;
    echo "Quantidade de alunos: " . ($aprovados + $reprovados) . PHP_EOL;
    echo "Aprovados: " . $aprovados . PHP_EOL;
    echo "Reprovados: " . $reprovados . PHP_EOL;
    echo "Media da turma: " . number_format($media, 2, ',', '.') . PHP_EOL;
}

// ---------- Programa principal ----------
$alunos = cadastrarAlunos();
listarAlunos($alunos);
$media = calcularMedia($alunos);
$aprovados = contarAprovados($alunos);
$reprovados = contarReprovados($alunos);
mostrarResumo($media, $aprovados, $reprovados);
