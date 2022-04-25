<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="assents/css/normalize.css">
    <link rel="stylesheet" href="assents/css/reset.css">
    <link rel="stylesheet" href="assents/css/grid.css">
    <link rel="stylesheet" href="assents/css/style.css">
    <!--Javascript-->
    <script src="/js/script.js"></script>
    <!--Tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <div class="top-bar">
            <!--Reundancia de containers -AA-->
            <div class="container">
                <ul class="icon-container">
                    <li><a href=""><img src="assents/icons/upper-icons/GUIAS-1.svg" alt="Informações"></a></li>
                    <li><a href=""><img src="assents/icons/upper-icons/GUIAS.svg" alt="Avisos"></a></li>
                    <li><a href=""><img src="assents/icons/upper-icons/facebook.svg" alt="Facebook"></a></li>
                    <li><a href=""><img src="assents/icons/upper-icons/instagram.svg" alt="Instagra,"></a></li>
                    <li><a href=""><img src="assents/icons/upper-icons/twitter.svg" alt="Twitter"></a></li>
                    <li><a href=""><img src="assents/icons/upper-icons/youtube.svg" alt="Youtube"></a></li>
                </ul>
            </div>
        </div>
        <div class="header-main container">
            <div class="menu-container">
                <!--adicionar link interno-->
                <nav id="nav">
                    <button id="btn-mobile"><span id="hamburguer"></span>MENU</button>
                    <ul id="menu">
                        <li><a href="">Slide</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Serviços</a></li>
                    </ul>
                </nav>
            </div>
            <div class="logo">
                <div class="logo-content">
                    <img src="/assents/imgs/header/logo_gov_al 1.png" alt="Logo Alagoas">
                    <div class="logo-text">
                        <h1>SEPLAG</h1>
                        <p>Secretaria de Estado do Planejamento, Gestão e Patrimônio</p>
                    </div>
                </div>
            </div>
            <div class="search-and-contact ">
                <a href="" class="btn-contact">Contato</a>
                <form action="POST">
                    <div class="search">
                        <input type="search" id="busca" name="busca" placeholder="Busque aqui">
                        <button type="submit"><img src="/assents/icons/search/Vector.svg" alt="Lupa"></button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    @yield('content')

    <section class="footer">
        <div class="container">
            <div class="left-footer">
                <h3>Governo do Estado de Alagoas</h3>
                <p>&copy; 2021 - Versão 1.0</p>
            </div>
            <div class="right-footer">
                <div class="separador">
                    <img src="assents/imgs/footer/Group.png" alt="">
                </div>
                <p>Instituto Identificado:</p>
                <img src="assents/imgs/footer/certificado.png" alt="">
            </div>
        </div>
    </section>
    <script src="/js/script.js"></script>
</body>
</html>