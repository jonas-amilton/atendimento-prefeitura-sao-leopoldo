<?php

session_start();

include_once('connection.php');
include_once('url.php');

$data = $_POST;

if (!empty($data)) {

    // registrar usuario
    if ($data['enviar'] === 'register') {
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $repeatPassword = $data['repeat-password'];

        if ($password === $repeatPassword) {
            $query = "INSERT INTO users (name, email, password) VALUE (:name, :email, :password)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);

            try {

                $stmt->execute();

                $_SESSION['msg'] = 'Usuário criado com sucesso!';
            } catch (PDOException $e) {
                //erro na conexao
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        } else {
            echo 'Senhas não estão iguais nos campos';
        }
    }

    // redireciona a home
    header('Location:' . $BASE_URL . '../index.php');
}

// print_r($data);

// fechar conexao
$conn = null;
