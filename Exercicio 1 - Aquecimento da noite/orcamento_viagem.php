<?php
// ==========================================================
// Senac Tour - Sistema de Orcamento de Viagem
// Exercicio de interpretacao - Aquecimento da noite
// ==========================================================

echo "==============================" . PHP_EOL;
echo "        SENAC TOUR" . PHP_EOL;
echo "==============================" . PHP_EOL;

// ---------- ENTRADA ----------
echo "Nome do cliente: ";
$cliente = readline();

echo "Cidade de origem: ";
$origem = readline();

echo "Cidade de destino: ";
$destino = readline();

echo "Quantidade de viajantes: ";
$qtdViajantes = (int) readline();

echo "Quantidade de dias: ";
$qtdDias = (int) readline();

echo "Valor da passagem por pessoa: ";
$valorPassagem = (float) readline();

echo "Valor da diaria: ";
$valorDiaria = (float) readline();

echo "Valor diario de alimentacao por pessoa: ";
$valorAlimentacaoDiaria = (float) readline();

echo "Valor diario de transporte: ";
$valorTransporteDiario = (float) readline();

echo "Valor do passeio por pessoa: ";
$valorPasseio = (float) readline();

// ---------- PROCESSAMENTO ----------
$totalPassagens = $valorPassagem * $qtdViajantes;
$totalHospedagem = $valorDiaria * $qtdDias;
$totalAlimentacao = $valorAlimentacaoDiaria * $qtdDias * $qtdViajantes;
$totalTransporte = $valorTransporteDiario * $qtdDias;
$totalPasseios = $valorPasseio * $qtdViajantes;

$totalViagem = $totalPassagens + $totalHospedagem + $totalAlimentacao + $totalTransporte + $totalPasseios;
$valorPorViajante = $totalViagem / $qtdViajantes;

$numeroOrcamento = rand(1000, 9999);
$dataOrcamento = date('d/m/Y');

// ---------- SAIDA ----------
echo PHP_EOL;
echo "========== ORCAMENTO ==========" . PHP_EOL;
echo "Numero do orcamento: " . $numeroOrcamento . PHP_EOL;
echo "Data: " . $dataOrcamento . PHP_EOL;
echo "Cliente: " . $cliente . PHP_EOL;
echo "Trajeto: " . $origem . " -> " . $destino . PHP_EOL;
echo "Quantidade de viajantes: " . $qtdViajantes . PHP_EOL;
echo "Quantidade de dias: " . $qtdDias . PHP_EOL;
echo "--------------------------------" . PHP_EOL;
echo "Total de passagens: R$ " . number_format($totalPassagens, 2, ',', '.') . PHP_EOL;
echo "Total de hospedagem: R$ " . number_format($totalHospedagem, 2, ',', '.') . PHP_EOL;
echo "Total de alimentacao: R$ " . number_format($totalAlimentacao, 2, ',', '.') . PHP_EOL;
echo "Total de transporte: R$ " . number_format($totalTransporte, 2, ',', '.') . PHP_EOL;
echo "Total de passeios: R$ " . number_format($totalPasseios, 2, ',', '.') . PHP_EOL;
echo "--------------------------------" . PHP_EOL;
echo "VALOR TOTAL DA VIAGEM: R$ " . number_format($totalViagem, 2, ',', '.') . PHP_EOL;
echo "VALOR POR VIAJANTE: R$ " . number_format($valorPorViajante, 2, ',', '.') . PHP_EOL;
echo "================================" . PHP_EOL;
