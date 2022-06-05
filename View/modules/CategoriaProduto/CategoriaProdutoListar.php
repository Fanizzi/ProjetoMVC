<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria de Produtos</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
            
        <?php foreach($model->rows as $item): ?>
            <tr>
                <td> <a href="/categoria_produto/delete?id=<?= $item->id ?>">X</a></td>
                <td> <?= $item->id ?> </td>
                <td> <a href="/categoria_produto/form?id=<?= $item->id ?>"> <?= $item->descricao ?> </a></td>
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="2">Nenhum registro encontrado...</td>
            </tr>
        <?php endif ?>
    </table>

</body>
</html>