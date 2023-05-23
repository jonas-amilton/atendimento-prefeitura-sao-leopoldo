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
            <span class="navbar-brand mb-0 h1">Prefeitura de São Leopoldo - Status</span>
            <a class="exit-button" href="index.php">Voltar</a>

        </div>

    </nav>

    <div class="container-principal">


        <div class="card-protocolo">

            <?php

            include './classe/Cadastro.php';


            $cadastro = new Cadastro();

            $solicitante = $_POST["solicitante"];    //solicitar do usuario informação
            $descricao = $_POST["descricao"];
            $email = $_POST["email"];
            $ano = date('Y'); //funcão para adicionar o ano
            $status = 1; // siginifica em analise


            $confirmar_cadastro = $cadastro->inserir($solicitante, $descricao, $email, $ano, $status);



            if (!$solicitante && !$descricao && !$email) {
                echo "<p>Erro no cadastro! Verifique!</p>";
            } else {
                $retorno = $cadastro->listar(); // Usar metodo listar da classe cadastro
                $dados = json_decode($retorno);


                if (isset($dados) && !empty($dados)) {
                    if (isset($dados) && !empty($dados)) {
                        foreach ($dados as $key => $value) {

                            echo "<h3>Cadastro realizado com sucesso</h3>";
                            echo "<pre>";
                            echo "<p>Protocolo: " . $value->numero . "</p>";
                            echo "<p>Solicitante: " . $value->solicitante . " </p>";
                            echo "<p>Descrição: " . $value->descricao . " </p>";
                            echo "<p>E-mail: " . $value->email . " </p>";
                            echo "<p>Ano: " . $value->ano . " </p>";
                            if ($value->status == 1) echo "<p>Status: Aguardando analise</p>";
                            echo "<p>Data Cadastro: " . $value->dataCadastro . " </p>";
                            echo "</pre>";
                        }
                    }
                }
            }



            ?>



        </div>

    </div>


    <footer>
        <p>Todos direitos reservados a Jonas Silva &reg RA:1803097</p>
    </footer>
</body>

<!-- Jonas Silva ® RA:1803097 -->


</html>