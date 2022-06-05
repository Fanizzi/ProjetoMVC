<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Produtos</title>
</head>
<body>
    <form action="/categoria_produto/save" method="post">
        <fieldset>
            <legend>Categoria de Produtos</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="descricao">Categoria:</label>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            <button type="submit">Enviar</button> 
        </fieldset>
    </form>
    
</body>
</html>