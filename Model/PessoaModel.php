<?php

/**
 * 
 */
class PessoaModel
{
    /**
     * 
     */
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco; 

    public $rows;


    /**
     * Chama a classe DAO para acesso ao Banco de Dados e salvar o objeto
     * no banco de dados.
     */
    public function save()
    {
        include 'DAO/PessoaDAO.php'; // Inclusão do arquivo DAO.

        $dao = new PessoaDAO(); // Instanciando a classe DAO.

        if(empty($this->id))
        {
            // Chamando o método insert que recebe o prórpio objeto model
            // Já preenchido.
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }

        // chamando o método save da classe DAO e passando a propria instancia 
        // da model para a classe DAO. Estamos fazendo isso porque o objeto em si
        // foi preenchido na Controller correspondente. 
    }

    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PessoaModel();
    }

    public function delete(int $id)
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        $dao->delete($id);

        header('Location: /pessoa');
    }
}