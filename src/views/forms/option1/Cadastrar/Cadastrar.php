<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Cadastrar.css" media="screen" />

    <title>Menu</title>
</head>

<body>
    <section></section>
    <div class="container">
        <form action="CadastrarFuncionario.php" method="POST">
        <div class="navbar">
            <input type="checkbox" id="check" class="navbar" />
            <label for="check" class="navbar">
                <img class="icon" src="../../../../../public/images/cerveja.png" alt="icone-cerveja">
            </label>
            <nav class="navbar">
                <ul class="navbar">

                    <li>
                        <a href=""><img class="navbar" id="casa" src="../../../../../public/images/pagina-inicial.png"></a>
                    </li>
                    <li>
                        <a href=""><img class="navbar" src="../../../../../public/images/medalha.png"></a>
                    </li>
                    <li class="rafa">
                        <input type="checkbox" id="menu" class="Menu" />
                        <a href="">
                            <label for="menu" class="Menu">
                                <img class="navbar" id="menu_img" src="../../../../../public/images/cardapio (1).png" alt="menu">
                            </label>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
        
        <div class="option">
            <form id="salvar" action="" method="POST">

                <input type="text" name="nome" placeholder="Nome">
                <input type="date" name="data_admissao">
                <input type="text" name="numero_ctps" placeholder="Número da CTPS">
                <input type="text" name="cpf" placeholder="CPF">
                <input type="text" name="endereco" placeholder="Endereço">
                <input type="text" name="endereco" placeholder="Telefone">
                <input type="email" name="email" placeholder="E-mail">

            </form>

            <div class="opcoes">
                <div class="voltar">
                    <button><a href="../../../options/option1/option1.html">Cancelar</a></button>
                </div>
                <div class="salvar">
                    <button type="submit" form="salvar">Salvar</button>
                </div>>
            </div>
        </div>
        </form>
        


    </div>

</body>

</html>