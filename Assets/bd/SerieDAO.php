<?php
require_once "ConexaoBD.php";
require "src/Util.php";

class serieDAO
{
    public static function cadastrarSerie($dados)
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
        $episodios = $dados['episodios'];
        $temporadas = $dados['temporadas'];
        $oscar = $dados['oscar'];
        $trailer = $dados['trailer'];


        $sql = "INSERT INTO serie (titulo, ano, idcategoria, idclassificacao, sinopse, imagem, imagemModal, diretor, elenco, episodios, temporadas, oscar, trailer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
        $stmt->bindParam(10, $episodios);
        $stmt->bindParam(11, $temporadas);
        $stmt->bindParam(12, $oscar);
        $stmt->bindParam(13, $trailer);

        $stmt->execute();
    }
}