<!DOCTYPE html>

<html lang="PT-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prefeitura de São Leopoldo</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Prefeitura de São Leopoldo - Atendimento</span>
        </div>
    </nav>

    <div class="container-login">
        <form class="card card-shadow login mt-2 d-flex flex-column" action="protocolo.php" method="post">
            <h3 class="text-center">
                Abertura de Protocolos
                <br>
                <small class="text-body-secondary">Login</small>
            </h3>
            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Digite sua senha</label>
            <input type="password" name="password" id="password">
            <input class="btn btn-primary mt-3" type="submit" value="enviar" required>
        </form>

    </div>




    <footer>
        <p>Todos direitos reservados a Jonas Silva &reg RA:1803097</p>
    </footer>

</body>

<!-- Jonas Silva ® RA:1803097-->

</html>