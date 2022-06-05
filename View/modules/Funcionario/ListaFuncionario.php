<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
<table>
        <tr>
            <th></th>
            <th> ID </th>
            <th> Nome </th>
            <th> RG </th>
            <th> CPF </th>
            <th> Data de Nascimento </th>
        </tr>

        <?php foreach($model->rows as $item): ?> 
            <tr>
                <td> <a href="/funcionario/delete?id=<?= $item->id ?>">X</a></td>
                <td> <?= $item->id ?> </td>
                <td> <a href="/funcionario/form?id=<?= $item->id ?>"> <?= $item->nome ?> </a></td>
                <td> <?= $item->rg ?> </td>
                <td> <?= $item->cpf ?> </td>
                <td> <?= $item->data_nascimento ?> </td>
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado...</td>
            </tr>
        <?php endif ?>
    </table>
    
</body>
</html>