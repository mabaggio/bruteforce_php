<?php
session_start();

// Verifica se a senha foi armazenada
if (!isset($_SESSION['senha'])) {
    echo "Nenhuma senha foi fornecida.";
    exit();
}

// Recupera a senha da sessão
$senha = $_SESSION['senha'];
$tamanho = mb_strlen($senha); //pega o tamanho da senha.
// Aqui você pode trabalhar com a senha (ex: validação, armazenamento, etc.)

// Exibe a senha (nunca faça isso em produção)
echo "<h1>Senha Recebida</h1>";
echo "<p>A senha que você digitou tem tamanho: <strong>" . $tamanho . "</strong></p>";
//echo "<p>A senha que você digitou é: <strong>" . htmlspecialchars($senha) . "</strong></p>";

// Define o fuso horário (opcional, mas recomendado)
date_default_timezone_set('America/Sao_Paulo');
echo "<h1>Testando apenas números</h1>"; 
inteiros($senha,$tamanho);
echo "<h1>Testando números e letras</h1>"; 
inteiros_letras($senha,$tamanho);

function inteiros($senha,$tamanho){
    $tempo_inicio = microtime(true); // Obtém a hora atual Formato: Horas:Minutos:Segundos
    echo "<p>A hora que começou o algoritmo:" . $tempo_inicio;
    $resultado = testa_inteiros($senha, $tamanho);
    $tempo_fim = microtime(true); // Obtém a hora atual Formato: Horas:Minutos:Segundos
    echo "<p>A senha que você digitou é: <strong>" . $resultado . "</strong></p>";
    echo "<p>A hora que terminou o algoritmo:" . $tempo_fim;
    $tempoTotal = $tempo_inicio - $tempo_fim;
    echo "<p>Total executando o algoritmo:" . round($tempoTotal, 4) ;

}


function inteiros_letras($senha,$tamanho){
    $tempo_inicio = microtime(true); // Obtém a hora atual Formato: Horas:Minutos:Segundos
    echo "<p>A hora que começou o algoritmo:" . $tempo_inicio;
    $resultado = testa_inteiros_letras($senha, $tamanho);
    $tempo_fim = microtime(true); // Obtém a hora atual Formato: Horas:Minutos:Segundos
    echo "<p>A senha que você digitou é: <strong>" . $resultado . "</strong></p>";
    echo "<p>A hora que terminou o algoritmo:" . $tempo_fim;
    $tempoTotal = $tempo_inicio - $tempo_fim;
    echo "<p>Total executando o algoritmo:" . round($tempoTotal, 4) ;

}

function testa_inteiros($senha, $tamanho)
{
    $achei = "";
    for ($i = 0; $i < $tamanho; $i++) {
        if ($senha[$i] == 0) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 1) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 2) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 3) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 4) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 5) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 6) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 7) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 8) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 9) {
            $achei[$i] = $senha[$i];
        }
    }
    return $achei;
}

function testa_inteiros_letras($senha, $tamanho)
{
    $achei = "";
    for ($i = 0; $i < $tamanho; $i++) {
        if ($senha[$i] == 0) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 1) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 2) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 3) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 4) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 5) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 6) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 7) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 8) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 9) {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 'a') {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 'A') {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 'b') {
            $achei[$i] = $senha[$i];
        } else if ($senha[$i] == 'B') {
            $achei[$i] = $senha[$i];
        }
    }
    return $achei;
}





// Limpa a sessão após o uso
unset($_SESSION['senha']);
?>