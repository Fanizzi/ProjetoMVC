<?php

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 */
class PessoaController 
{
    /**
     * Os métodos index serão usados para devolver uma View.
     */
    public static function index() 
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();
        
        include 'View/modules/Pessoa/ListaPessoas.php';
    }


    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Pessoa/FormPessoa.php';
    }


    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save() {

        include 'Model/PessoaModel.php'; // inclusão do arquivo model.

        $pessoa = new PessoaModel(); // Instância do objeto a ser preenchido.
       
        // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
        // pelo usuário no formulário (note o envio via POST)
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        $pessoa->save(); // chamando o método save da model.

        header("Location: /pessoa"); // redirecionando o usuário para outra rota.
    }

    public static function delete()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->delete( (int) $_GET['id'] );

        header("Location: /pessoa");
    }
}