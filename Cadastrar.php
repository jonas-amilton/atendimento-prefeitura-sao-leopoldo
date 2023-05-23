<!DOCTYPE html>

<html lang="PT-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prefeitura de São Leopoldo</title>

    <link rel="stylesheet" href="style/global.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Prefeitura de São Leopoldo - Cadastro de atendimento</span>
            <a class="exit-button" href="index.php">Voltar</a>

        </div>
    </nav>


    <div class="container-principal">

        <form action="ValidarCadastro.php" id="cadastro" method="POST">
            <h3>Cadastrar protocolo de atendimento!</h3>

            <div class="mb-3">

                <input type="text" class="form-control" name="solicitante" placeholder="Digite o solicitante:" required>
            </div>
            <div class="mb-3">


                <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail:" required>
            </div>
            <div class="form-floating">


                <textarea class="form-control" type="text" name="descricao" placeholder="Digite a descrição:"></textarea>

                <label for="floatingTextarea2">Descrição</label>
            </div>

            <button style="margin: 0.4em" type="submit" class="enviar btn btn-primary" class="enviar" value="Enviar">Enviar</button>

        </form>

    </div>


    <footer>
        <p>Todos direitos reservados a Jonas Silva &reg RA:1803097</p>
    </footer>

</body>

<!-- Jonas Silva ® RA:1803097 -->


</html>