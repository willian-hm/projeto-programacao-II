<?php
require_once "ConexaoBD.php";
require "src/Util.php";

class FilmeDAO
{
    public static function cadastrarFilme($dados)
    {
        $conexao = ConexaoBD::conectar();

        $titulo = $dados['titulo'];
        $ano = $dados['ano'];
        $idcategoria = $dados['idcategoria'];
        $idclassificacao = $dados['idclassificacao'];
        $sinopse = $dados['sinopse'];
        $imagem = Util::salvarArquivo();
        $imagemModal = Util::salvarArquivo();
        $diretor = $dados['diretor'];
        $elenco = $dados['elenco'];
        $oscar = $dados['oscar'];
        $trailer = $dados['trailer'];


        $sql = "INSERT INTO filme (titulo, ano, idcategoria, idclassificacao, sinopse, imagem, imagemModal, diretor, elenco, oscar, trailer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $titulo);
        $stmt->bindParam(2, $ano);
        $stmt->bindParam(3, $idcategoria);
        $stmt->bindParam(4, $idclassificacao);
        $stmt->bindParam(5, $sinopse);
        $stmt->bindParam(6, $imagem);
        $stmt->bindParam(7, $imagemModal);
        $stmt->bindParam(8, $diretor);
        $stmt->bindParam(9, $elenco);
        $stmt->bindParam(10, $oscar);
        $stmt->bindParam(11, $trailer);

        $stmt->execute();
    }

    
}