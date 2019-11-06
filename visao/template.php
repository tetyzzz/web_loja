<html>
    <head>
        <title>F_C</title>
        <base href="<?= URL_BASE ?>">

        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'></head>
</head>
<link rel="stylesheet" href="./publico/css/app.css">
</head>

<div id="it">
    <div id="colum">
        <a id="img" href="./principal/index"><img id="fundo" src="./publico/imgs/logaster.png"></a>
        <a href="./car/listar"><button class="button button5" title="Carrinho" ><i class='fas fa-cart-plus' ></i></button></a>
        <a href="./login/"><button class="button button5" title="Login"><i class='fas fa-user'></i></button></a>
        <form id="bar" method="POST" action="./produto/buscar"> 
            <input id="pesquisa" type="text" placeholder="Pesquisar" name="busca">
            <button class="button" id="lupa" title="Pesquisar" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="navbar">
        <a href="./principal/index">Home</a>
        <?php if(acessoPegarPapelDoUsuario() == 'admin'){?><a href="./produto/listarprodutos">Produtos</a><?php }?>
        <a href="./car/listar">Carrinho</a>
        <a href="./cliente/adicionar">Cadastrar-se</a>
        <?php if(acessoUsuarioEstaLogado()):?>
        <a href="./login/logout">Sair</a>
        <?php endif;?>
    </div>
</div>

<body class="container">
    <main class="container" id="cssaula">
        <?php require $viewFilePath; ?>
        <br><br>
        <ul>
            <?php if (acessoPegarPapelDoUsuario() != 'admin') { ?>
            <li id="waa" ><a href="./principal/index"><button id="aves">Página Principal</button></a><br><br></li>
            <li id="waa" ><a href="./car/listar"><button id="aves">Meu Carrinho</button></a><br><br></li>
            <?php } else { ?>
            <li id="waa" ><a href="./cliente/listarcliente"><button id="aves">Listar todos os clientes</button></a><br><br></li>
            <li id="waa" ><a href="./produto/listarprodutos"><button id="aves">Listar todos os produtos</button></a><br><br></li>
            <li id="waa" ><a href="./categoria/listarcategorias"><button id="aves">Listar todos as categorias</button></a></li>
            <li id="waa" ><a href="./cupom/listarCupom"><button id="aves">Listar todos os cupons</button></a></li>
            <li id="waa" ><a href="./formapaga/listarPagamentos"><button id="aves">Formas de pagamento</button></a></li>
            <?php } ?>
        </ul>
    </main>

    <div id="rodape">	
        <div id="r">
            <div class="lista">
                <span class="titulo">SEU PERFIL</span>
                <ul>
                    <li><a href = "#">Minha conta</a></li>
                    <li><a href = "./car/listar">Meu carrinho</a></li>
                </ul>
            </div>	

            <div class="lista">
                <span class="titulo">AJUDA</span>
                <ul>
                    <li><a href = "#">Como comprar </a></li>
                    <li><a href = "#">Formas de pagamento</a></li>
                </ul>
            </div>	

            <div class="lista">
                <span class="titulo">FALE CONOSCO</span>
                <ul>
                    <li><a href = "#">Central de Atendimento</a></li>
                    <li><a href = "#">SAC 15 99604 7336</a></li>
                    <li><a href = "#">sac@fabulouscloset.com.br</a></li>
                </ul>
            </div>

            <div class="lista">
                <span class="titulo">FORMAS DE PAGAMENTO</span>
                <ul>
                    <li id="pagamento"><a href = "#"><i style='font-size:30px' class='fab'>&#xf1f0;</i></a></li>
                    <li id="pagamento"><a href = "#"><i style='font-size:30px' class='fab'>&#xf1f1;</i></a></li>
                    <li id="pagamento"><a href = "#"><i style='font-size:30px' class='fab'>&#xf24c;</i></a></li>
                    <li id="pagamento"><a href = "#"><i style='font-size:33px' class='fas'>&#xf3d1;</i></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
</body>
</html>
