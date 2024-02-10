<?php

include_once('../conexao/Conexao.php');

class Cadastro
{
    private $conexao;

    public function __construct()
    {
        try {
            $conexao = new Conexao();
            $this->conexao = $conexao->getConexao();
        } catch (PDOException $e) {
            throw new Exception('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $stmt = $this->conexao->prepare('SELECT * FROM cadastro ORDER BY numero DESC LIMIT 1');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Erro ao listar cadastros: ' . $e->getMessage());
        }
    }

    public function inserir($solicitante, $descricao, $email, $ano, $status)
    {
        try {
            $stmt = $this->conexao->prepare('INSERT INTO cadastro (solicitante, descricao, email, ano, status) VALUES(:SOLICITANTE,:DESCRICAO,:EMAIL,:ANO,:STATUS)');
            $stmt->execute(array(':SOLICITANTE' => $solicitante, ':DESCRICAO' => $descricao, ':EMAIL' => $email, ':ANO' => $ano, ':STATUS' => $status));
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            throw new Exception('Erro ao inserir cadastro: ' . $e->getMessage());
        }
    }

    public function listarUm($id)
    {
        try {
            $stmt = $this->conexao->prepare("SELECT * FROM cadastro WHERE numero = ?");
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Erro ao listar cadastro por ID: ' . $e->getMessage());
        }
    }
}


    //Jonas Silva ® RA:1803097