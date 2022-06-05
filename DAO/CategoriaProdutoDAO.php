<?php

class CategoriaProdutoDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(CategoriaProdutoModel $model)
    {
        $sql = "INSERT INTO categoria_produto
                (descricao)
                VALUES (?)";
                
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM categoria_produto';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/CategoriaProdutoModel.php';

        $sql = 'SELECT * FROM categoria_produto WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM categoria_produto WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function update(CategoriaProdutoModel $model)
    {
        $sql = 'UPDATE categoria_produto SET descricao=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
}