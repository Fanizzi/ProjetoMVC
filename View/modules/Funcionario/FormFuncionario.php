<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Funcionario</legend>
            <form method="POST" action="/funcionario/save">
        
                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome:</label> <br>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" /> <br>

                <label for="sexo">Sexo:</label> <br>
                <input id="sexo" name="sexo" value="<?= $model->sexo ?>" type="text" /> <br>

                <label for="rg">RG:</label> <br>
                <input id="rg" name="rg" value="<?= $model->rg ?>" type="text" />  <br>

                <label for="cpf">CPF:</label> <br>
                <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="text" /> <br>

                <label for="data_nascimento">Data de Nascimento:</label> <br>
                <input id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>" type="date" /> <br>

                <br> <button type="submit">Enviar</button>
            </form>
    </fieldset>
</body>
</html>