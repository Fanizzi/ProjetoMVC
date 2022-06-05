<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produto</title>
</head>
<body>
    <form method="post" action="/produto/save">
        <fieldset>
            <legend>Cadastro de Produto</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label> <br>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" /> <br />

            <label for="preco">Preço:</label> <br>
            <input id="preco" name="preco" value="<?= $model->preco ?>" type="text" /> <br />

            <label for="descricao">Descrição:</label> <br>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" /> <br />


            <label for="categoria">Categoria: </label>
            <br>
            <select name="id_categoria_produto">
                <?php foreach ($model1->lista_categorias as $categoria):?>
                    <option value="<?= $categoria->id ?>">
                        <?= $categoria->descricao ?>
                    </option> 
                <?php endforeach?>
            </select> <br>

            <br> <button type="submit">Enviar</button>
        </fieldset>
    </form>
    
</body>
</html>