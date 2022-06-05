<?php

class PessoaDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }


    public function insert(PessoaModel $model)
    {
        $sql = 'INSERT INTO pessoa
                (nome, rg, cpf, data_nascimento, email, telefone, endereco)
                VALUES (?, ?, ?, ?, ?, ?, ?)';
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->data_nascimento);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->endereco);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM pessoa';
                
        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM pessoa WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function update(PessoaModel $model)
    {
        $sql = 'UPDATE pessoa SET nome=?, rg=?, cpf=?, data_nascimento=?, email=?, telefone=?, endereco=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->data_nascimento);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->endereco);
        $stmt->bindValue(8, $model->id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/PessoaModel.php';
        
        $sql = 'SELECT * FROM pessoa WHERE id = ?';
                
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PessoaModel");
    }
    
}