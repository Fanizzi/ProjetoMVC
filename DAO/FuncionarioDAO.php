<?php

class FuncionarioDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();

    }

    public function insert(FuncionarioModel $model)
    {
        $sql = 'INSERT INTO funcionario (nome, sexo, rg, cpf, data_nascimento)
                VALUES (?, ?, ?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sexo);
        $stmt->bindValue(3, $model->rg);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->data_nascimento);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM funcionario';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = 'SELECT * FROM funcionario WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM funcionario WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function update(FuncionarioModel $model)
    {
        $sql = 'UPDATE funcionario SET nome=?, sexo=?, rg=?, cpf=?, data_nascimento=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sexo);
        $stmt->bindValue(3, $model->rg);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->data_nascimento);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();
    }
}