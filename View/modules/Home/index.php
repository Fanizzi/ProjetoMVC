<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Mix Roupas</title>
</head>
<body>

    <header>
        <nav id="nav">
            <img src="/CSS/IMGS/mix-roupas.png">
            

            <ul>
                <li>
                    <div class="dropdown">
                        <a href="#">Funcionário</a>
                        <div class="dropdown-content">
                            <a href="/funcionario/form">Registrar novo(a)</a>
                            <a href="/funcionario">Consulta</a>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="dropdown">
                        <a href="#">Categoria Produto</a>
                        <div class="dropdown-content">
                            <a href="/categoria_produto/form">Registrar novo(a)</a>
                            <a href="/categoria_produto">Consulta</a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="dropdown">
                        <a href="#">Produto</a>
                        <div class="dropdown-content">
                            <a href="/produto/form">Registrar novo(a)</a>
                            <a href="/produto">Consulta</a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="dropdown">
                        <a href="#">Pesssoa</a>
                        <div class="dropdown-content">
                            <a href="/pessoa/form">Registrar novo(a)</a>
                            <a href="/pessoa">Consulta</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <img src="/CSS/IMGS/pug.png">
    </main>

    <footer id="contact">
        <h2>Nos mande uma mensagem!</h2>
        <p>Nos mande uma mensagem caso tenha alguma dúvida/problema</p>
        <img src="/CSS/IMGS/contato.png" alt="contato">
        <form action="" method="">
            <input type="text" name="name" placeholder="Seu nome">
            <input type="email" name="email" placeholder="Seu e-mail">
            <textarea name="msg" placeholder="Digite uma mensagem"></textarea>
            <input type="submit" value="Enviar">
        </form>
        <p class="by">Desenvolvido por <span class="detail">Lorenzo Fanizzi</span></p>
    </footer>
    
</body>
</html>