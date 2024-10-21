<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Força Bruta</title>
</head>

<body>
    Seja bem vindo ao algoritmo de exemplo de Força Bruta. Neste exemplo, você vai digitar uma senha e o algoritmo vai tentar todas combinações possíveis até achar a senha que você digitou.
    <h1>Digite sua senha</h1>
    <form method="POST" action="">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    // Inicializa a sessão
    session_start();

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coleta a senha digitada
        $senha = $_POST['senha'];

        // Aqui você pode trabalhar com a senha, como armazená-la ou validá-la
        $_SESSION['senha'] = $senha; // Armazenando em sessão para uso posterior

        // Redireciona para a página que processa a senha
        header("Location: processar.php");
        exit();
    }
    ?>

</body>

</html>