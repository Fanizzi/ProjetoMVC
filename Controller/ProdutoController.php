<?php

class ProdutoController
{

    public static function index()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllCategorias();
        $model->getAllRows();

        include 'View/modules/Produto/ProdutoListar.php'; 
    }

    public static function form()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id'] );

        $model1 = new ProdutoModel();
        $model1->getAllCategorias();

        include 'View/modules/Produto/FormProduto.php';
    }

    public static function save()
    {

        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel();

        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $produto->descricao = $_POST['descricao'];
        $produto->id_categoria_produto = $_POST['id_categoria_produto'];

        $produto->save();

        header("Location: /produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel;
        $model->delete( (int) $_GET['id']);

        header("Location: /produto");
    }
    
}