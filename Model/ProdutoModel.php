<?php

class ProdutoModel
{
    public $id, $nome, $preco, $descricao;

    public $lista_categorias;

    public $rows;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();
        
        if(empty($this->id))
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include_once 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO;
        $this->rows = $dao->select();
    }

    public function getAllCategorias()
    {
        include_once 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $this->lista_categorias = $dao->selectCategoria();
    }

    public function getById(int $id)
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id);
        
        return ($obj) ? $obj : new ProdutoModel;
    }

    public function delete(int $id)
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO;
        $dao->delete( (int) $id); 

        header('Location: /produto');
    }
}