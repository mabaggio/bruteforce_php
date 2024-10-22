<?php
session_start();

// Verifica se a senha foi armazenada
if (!isset($_SESSION['senha'])) {
    echo "Nenhuma senha foi fornecida.";
    exit();
}
$dicionario1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
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
inteiros($senha, $dicionario1);


function inteiros($senha, $tamanho)
{
    $tempo_inicio = microtime(true); // Obtém a hora atual Formato: Horas:Minutos:Segundos
    echo "<p>A hora que começou o algoritmo:" . $tempo_inicio;
    $resultado = testa_inteiros($senha, $tamanho);
    $tempo_fim = microtime(true); // Obtém a hora atual Formato: Horas:Minutos:Segundos
    echo "<p>A hora que terminou o algoritmo:" . $tempo_fim;
    $tempoTotal = $tempo_inicio - $tempo_fim;
    echo "<p>Total executando o algoritmo:" . round($tempoTotal, 4);
}

function testa_inteiros($senha, $dicionario)
{
    $achou = 0;
    $aux = "";
    while ($achou != 1) {
        testatudo($senha, $dicionario, $aux);
    }
}

function testatudo($senha, $dicionario, $aux)
{
    $achou = 0;
    for ($i = 0; $i < sizeof($dicionario); $i++) {
        $aux = $aux + $dicionario[$i];
        echo "<p>Testando com senha igual a :" . $aux;
        if ($senha == $aux) {
            echo " -> Encontrou, a senha era:" . $aux;
            $achou = 1;
            return $achou;
        } else {
            echo " -> Não encontrou";
        }
    }
    return $achou;
}

// Limpa a sessão após o uso
unset($_SESSION['senha']);
