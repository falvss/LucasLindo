<?php
// ==========================================================
// AutoTech Servicos Automotivos - Orcamento de Servico
// ==========================================================

// ---------- RF01: Identificacao do orcamento ----------
$numeroOrcamento = rand(1000, 9999);
$dataOrcamento = date('d/m/Y');

echo "==============================" . PHP_EOL;
echo "   AUTOTECH SERVICOS AUTOMOTIVOS" . PHP_EOL;
echo "==============================" . PHP_EOL;
echo "Orcamento numero: " . $numeroOrcamento . PHP_EOL;
echo "Data: " . $dataOrcamento . PHP_EOL;
echo PHP_EOL;

// ---------- RF02: Dados do cliente ----------
echo "Nome do cliente: ";
$nomeCliente = readline();

echo "Telefone: ";
$telefone = readline();

// ---------- RF03: Dados do veiculo ----------
echo "Modelo do veiculo: ";
$modelo = readline();

echo "Marca: ";
$marca = readline();

echo "Ano: ";
$ano = (int) readline();

echo "Placa: ";
$placa = readline();

echo "Quilometragem atual: ";
$km = (int) readline();

// ---------- RF04: Servico ----------
echo "Descricao do servico: ";
$descricaoServico = readline();

echo "Valor da mao de obra (por hora): ";
$valorHora = (float) readline();

echo "Quantidade de horas previstas: ";
$qtdHoras = (float) readline();

$totalMaoDeObra = $valorHora * $qtdHoras;

// ---------- RF05: Pecas ----------
echo "Nome da peca: ";
$nomePeca = readline();

echo "Valor unitario da peca: ";
$valorUnitarioPeca = (float) readline();

echo "Quantidade necessaria: ";
$qtdPeca = (int) readline();

$totalPecas = $valorUnitarioPeca * $qtdPeca;

// ---------- RF06: Materiais adicionais ----------
echo "Valor estimado de materiais adicionais (oleo, limpeza, etc.): ";
$materiaisAdicionais = (float) readline();

// ---------- RF07: Calculo do orcamento ----------
$totalOrcamento = $totalMaoDeObra + $totalPecas + $materiaisAdicionais;
$valorParcela = $totalOrcamento / 3;

// ---------- RF08: Comprovante ----------
echo PHP_EOL;
echo "========== COMPROVANTE ==========" . PHP_EOL;
echo "Numero do orcamento: " . $numeroOrcamento . PHP_EOL;
echo "Data: " . $dataOrcamento . PHP_EOL;
echo "----------------------------------" . PHP_EOL;
echo "Cliente: " . $nomeCliente . PHP_EOL;
echo "Telefone: " . $telefone . PHP_EOL;
echo "----------------------------------" . PHP_EOL;
echo "Veiculo: " . $marca . " " . $modelo . " (" . $ano . ")" . PHP_EOL;
echo "Placa: " . $placa . PHP_EOL;
echo "Quilometragem: " . $km . " km" . PHP_EOL;
echo "----------------------------------" . PHP_EOL;
echo "Servico: " . $descricaoServico . PHP_EOL;
echo "Mao de obra: R$ " . number_format($totalMaoDeObra, 2, ',', '.') . PHP_EOL;
echo "Peca (" . $nomePeca . "): R$ " . number_format($totalPecas, 2, ',', '.') . PHP_EOL;
echo "Materiais adicionais: R$ " . number_format($materiaisAdicionais, 2, ',', '.') . PHP_EOL;
echo "----------------------------------" . PHP_EOL;
echo "VALOR TOTAL: R$ " . number_format($totalOrcamento, 2, ',', '.') . PHP_EOL;
echo "3 parcelas de: R$ " . number_format($valorParcela, 2, ',', '.') . PHP_EOL;
echo "==================================" . PHP_EOL;
