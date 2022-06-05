<?php

class CategoriaProdutoModel
{
    public $id, $descricao;

    public $rows;

    public function save()
    {
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();
        
        if (empty($this->id))
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
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();
        
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CategoriaProdutoModel();
    }

    public function delete(int $id)
    {
        include 'DAO/CategoriaProdutoDAO.php';

        $dao = new CategoriaProdutoDAO();
        $dao->delete($id);

        header("Location: /categoria_produto");
    }

}