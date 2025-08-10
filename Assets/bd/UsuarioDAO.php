<?php
require_once "ConexaoBD.php";

class UsuarioDAO
{
    public static function cadastrar($dados)
    {
        $conexao = ConexaoBD::conectar();

        $nome = $dados['nome'];
        $senha = $dados['senha'];
        $email = $dados['email'];

        $sql = "INSERT INTO cliente (nome, senha, email) VALUES (?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $senha);
        $stmt->bindParam(3, $email);

        $stmt->execute();
    }
}