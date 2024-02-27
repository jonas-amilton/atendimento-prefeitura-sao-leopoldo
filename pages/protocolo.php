<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    // Se não estiver logado, redireciona para a página de login
    header('Location: ../index.php');
    exit();
}

// Se o usuário clicar no link de logout, limpa as variáveis de sessão e redireciona para a página de login
if (isset($_GET['logout'])) {
    // Limpa todas as variáveis de sessão
    $_SESSION = array();
    // Redireciona para a página de login
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Protocolos</title>
</head>

<body>
    <!-- Link de logout -->
    <a href="?logout=true">Logout</a>
    <h1>Bem-vindo</h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, aliquid.
        In saepe esse, laudantium accusamus ea sequi! Accusantium, mollitia omnis nesciunt eaque minus fuga eum, illo
        odio quasi cumque quae?
    </p>
</body>

</html>