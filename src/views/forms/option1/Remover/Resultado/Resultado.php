<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Resultado.css" media="screen" />

    <title>Menu</title>
</head>

<body>
    <section></section>
    <div class="container">

        <div class="navbar">
            <input type="checkbox" id="check" class="navbar" />
            <label for="check" class="navbar">
                <img class="icon" src="../../../../public/images/cerveja.png" alt="icone-cerveja">
            </label>
            <nav class="navbar">
                <ul class="navbar">

                    <li>
                        <a href=""><img class="navbar" id="casa" src="../../../../public/images/pagina-inicial.png"></a>
                    </li>
                    <li>
                        <a href=""><img class="navbar" src="../../../../public/images/medalha.png"></a>
                    </li>
                    <li class="rafa">
                        <input type="checkbox" id="menu" class="Menu" />
                        <a href="">
                            <label for="menu" class="Menu">
                                <img class="navbar" id="menu_img" src="../../../../public/images/cardapio (1).png" alt="menu">
                            </label>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="option">
            Remover um Funcionário
            <br>

            <form id="pesquisar" action="" method="post">
                <input placeholder="Pesquisar" name="pesquisar" type="text">
            </form>
            <div >
                <button type="submit" form="pesquisar">Pesquisar</button>
            </div>

            <div class="result">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th><button id='1'>Remover?</button></th>
                </tr>
            </div>
            <div class="opcoes">
                <div class="Cancelar">
                    <button>Cancelar</button>
                </div>
            </div>
        </div>


    </div>

</body>

</html>