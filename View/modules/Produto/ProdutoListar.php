<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th> ID </th> <br>
            <th> Nome </th> <br>
            <th> Descrição </th> <br>
            <th> Preço </th> <br>
            <th> Categoria </th>
        </tr>   
       
        <?php foreach($model->rows as $item): ?>

                <td> <a href="/produto/delete?id=<?= $item->id ?>">X</a> </td>
                <td> <?= $item->id ?> </td>
                <td> <a href="/produto/form?id=<?= $item->id ?>"> <?= $item->nome ?> </a> </td>
                <td> <?= $item->descricao ?> </td>
                <td> <?= $item->preco ?> </td>
                <td> <?= $item->id_categoria_produto ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>