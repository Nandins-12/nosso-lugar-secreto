<?php require_once('authentication.php')?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Presente para a menina mais incrivel deste mundo! Um lugar secreto em meio a toda a internet.">
    <meta property="og:image" content="https://nandins-12.github.io/nosso-lugar-secreto/assets/preview.png">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/341d4ca1c0.js" crossorigin="anonymous"></script>

    <!--JavaScript-->
    <script src="scripts/home.js" defer></script>
    <script src="scripts/btn-mobile.js" defer></script>

    <title>Nosso Lugar secreto</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="area-menu">
                <a href="index.html" id="logo">
                    <img src="assets/logo.png" alt="Nosso Lugar Secreto">
                </a>
                <button id="btn-mobile" title="Menu" onclick="toggle()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="home.php" class="active">
                            Home
                            <div class="border-bottom-button"></div>
                        </a>
                    </li>
                    <li>
                        <a href="photos.php">
                            Galeria
                            <div class="border-bottom-button"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Qualidades
                            <div class="border-bottom-button"></div>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    
    <main class="container">

        <section id="square-cards" class="container">
            
            <div class="square-card">
                <h2>Estamos juntos a...</h3>
                <p id="day-area"></p>
                <h3>Days</h3>
            </div>

            <div class="square-card">
                <h2>Tempo que eu te amo...</h3>
                <p id="love-area"></p>
                <h3>Years</h3>
            </div>

        </section>

        <div class="hr"></div>

        <section id="what-area" class="container">

            <div class="what-is-here">   
                <h2>O que é isso?</h2>
                <p align="justify">Oi meu amor, você deve estar se perguntando agora o que é isso tudo.. Bom, essa semana foi super chata. Aconteceram tantas coisas. Então eu decidi te fazer alguma coisa, faz algum tempo que eu venho pensando em como te presentear, eu queria de verdade poder te dar algo super caro; como um celular novo, uma viagem pra Dubai kk, queria poder te dar o mundo. No entanto, eu fiz esse cantinho, um lugar onde ficará eternizado (enquanto existir a internet ou enquanto você não me pedir pra tirar do ar ksk) o quanto eu te amo e o quanto você é especial pra mim. Você é linda, estar com você é como se eu tivesse sempre um porto seguro sabe, alguém com quem lidar com os problemas da vida juntos, enfim, o que no fundo eu mais quero é que você também tenha essa sensação, a sensação de não se sentir sozinha, de não carregar o peso só, por isso eu estou aqui, pra gente seguir em frente juntos, até o dia que nos casaremos e seremos felizes para sempre ksksksk assim como num conto da disney; você é minha princesa. Ou assim como nas letras de Sant; você é minha luz que invade celas. Saiba que desde que eu te conheci meu mundo é completamente diferente, na verdade, não consigo me lembrar como é meu mundo sem você, adoro a sua espontaneidade, adoro cada traço e cada qualidade sua. Enfim, este foi meu presente pra você, ao invés de colocar uma foto nossa no colar de coração que eu te comprei, por que não colocar um lugar inteirinho com todas as nossas fotos maneiras e coisas legais?</p>
            </div>

        </section>

        <section id="about-here" class="container">

            <h1>O que tem aqui</h1>
            
            <div class="content-about">
                <div class="box-about">
                    <h2>Galeria</h2>
                    <div>
                        <p>Na aba galeria tem todas nossas fotos maneras, desde as mais boiolas até as mais zuadas, todas com uma descrição igualmente manera 😎</p>
                    </div>
                </div>
                <img src="assets/photos.png" alt="Galeria">
            </div>
            <div class="content-about">
                <img src="assets/hearth.png" alt="Corações">
                <div class="box-about">
                    <h2>O quanto eu sou boiola por você (qualidades)</h2>
                    <div>
                        <p>Nesta aba, terá todas as qualidades que me fazem ser total apaixonado nessa garota, sim, eu sou totalmente boiolinha por ela, to nem ai, sou mesmo😠😔❤</p>
                    </div>
                </div>
            </div>
            <div class="content-about">
                <div class="box-about">
                    <h2>Home</h2>
                    <div>
                        <p>Está pagina que você se encontra agora, onde eu apresento tudo o que contém no site. Enfim, é nois parcera!</p>
                    </div>
                </div>
                <img src="assets/home.png" alt="Casa">
            </div>

        </section>
    </main>

    <footer>
        <p>Desenvolvido por Fernando Dias, todos os direitos reservados&copy;</p>
    </footer>

</body>
</html>