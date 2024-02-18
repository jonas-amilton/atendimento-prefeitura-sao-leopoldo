<?php

$host = 'localhost';
$dbname = 'atendimento_prefeitura_sao_leopoldo';
$user = 'root';
$pass = '1234';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //erro na conexao
    $error = $e->getMessage();
    echo "Erro: $error";
}

    //Jonas Silva ® RA:1803097