<?php


class CategoriaProdutoController
{

    public static function index()
    {
        include 'Model/CategoriaProdutoModel.php';
        
        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        include 'View/modules/CategoriaProduto/CategoriaProdutoListar.php';
    }

    ## Devolvendo uma View com um formulário para o usuário.
    public static function form()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        
        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/CategoriaProduto/CategoriaProduto.php';
    }

    ## Salvando os arquivos do formulário na Model para enviar para o banco de dados.
    public static function save()
    {
        include 'Model/CategoriaProdutoModel.php';

        $categoriaProduto = new CategoriaProdutoModel();

        $categoriaProduto->id = $_POST['id'];
        $categoriaProduto->descricao = $_POST['descricao'];
        $categoriaProduto->save();

        header("Location: /categoria_produto");
    }

    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /categoria_produto");
    }

}