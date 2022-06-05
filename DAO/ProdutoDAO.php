<?php

class ProdutoDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO produto (nome, preco, descricao, id_categoria_produto)
                VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id_categoria_produto);

        $stmt->execute();
    }

    public function selectCategoria()
    {
        $sql = 'SELECT * FROM categoria_produto';
                
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function select() 
    {
        $sql = "SELECT * FROM produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once "Model/ProdutoModel.php";

        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM produto WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function update(ProdutoModel $model)
    {
        $sql = 'UPDATE produto SET nome=?, preco=?, descricao=?, id_categoria_produto=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id_categoria_produto);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }
}