<!DOCTYPE html>

<html lang="PT-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

    <link rel="stylesheet" href="../css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php
    include_once('../config/url.php');
    include_once('../config/process.php');
    ?>
</head>

<body>

    <?php
    include_once('../templates/header.php');
    ?>

    <div class="container-login">
        <form class="card card-shadow login mt-2 d-flex flex-column" action="../config/process.php" method="post">
            <h3 class="text-center">
                Abertura de Protocolos
                <br>
                <small class="text-body-secondary">Cadastre-se</small>
            </h3>
            <label for="name">Digite seu nome</label>
            <input type="text" name="name" id="name" placeholder="usuario" required>
            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email" placeholder="usuario@email.com" required>
            <label for="password">Digite sua senha</label>
            <input type="password" name="password" id="password" placeholder="********" required>
            <label for="repeat-password">Digite sua senha novamente</label>
            <input type="password" name="repeat-password" id="repeat-password" placeholder="********" required>
            <button class="btn btn-primary mt-3" name="enviar" type="submit" value="register">
                Enviar
            </button>
            Já tem conta?
            <p><a class="link-opacity-75" href="../index.php">Login</a></p>
        </form>
    </div>
    </div>




    <?php
    include_once('../templates/footer.php');
    ?>

</body>

<!-- Jonas Silva ® RA:1803097-->

</html>