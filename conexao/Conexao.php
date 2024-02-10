<?php

class Conexao
{
    private $conectar;

    public function __construct()
    {
        try {
            $this->conectar = new PDO("mysql:host=localhost;dbname=atendimento_prefeitura_sao_leopoldo", "root", "");
            $this->conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Aqui você pode lidar com a exceção de forma mais robusta, como logá-la ou relançá-la
            echo 'Erro com o banco de dados: ' . $e->getMessage();
        }
    }

    public function getConexao()
    {
        return $this->conectar;
    }

    public function fecharConexao()
    {
        $this->conectar = null;
    }
}


    //Jonas Silva ® RA:1803097