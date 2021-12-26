<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As fotos mais incriveis com a menina mais incrivel do planeta!">
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
    <link rel="stylesheet" href="css/photos.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/341d4ca1c0.js" crossorigin="anonymous"></script>

    <!--JavaScript-->
    <script src="scripts/btn-mobile.js" defer></script>
    <script src="scripts/photos.js" defer></script>

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
                        <a href="home.php">
                            Home
                            <div class="border-bottom-button"></div>
                        </a>
                    </li>
                    <li>
                        <a href="photos.php" class="active">
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
        <section id="photos">
            
            <div class="header">
                <div>
                    <h1>Galeria</h1>
                </div>
                <div class="header-photo">
                    <img src="assets/photos.png" alt="Galeria">
                </div>
            </div>

            <div class="galeria">
                
                <article class="card-photo">
                    <h2>Ela tirando foto com minha cabeça (??)</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="2" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/elacomminhacabeca-images.png" alt="Fotos que Luiza tirou junto a cabeça de Fernando." onclick="Modal.toggleModal(0)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Esse dia foi muito dahora, foi o dia que meus pais foram na casa dela, pra minha mãe conhecer a mãe dela (já que meu pai e o dela ja se conheciam). Depois que eles foram embora eu fiquei mais um pouco, kkskksk eu tava assistindo sentado do lado dela e nem percebi ela tirando fotos com a minha cabeça assim😁✌ eu realmente acho essa menina muito engraçadinha.</p>
                            <div>
                                <p>24/10/2021</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-photo">
                    <h2>Primeira vez que ela usou meu moletom</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="4" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/shopping-images.png" alt="Fotos tiradas quando foram no shopping." onclick="Modal.toggleModal(1)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Esse dia foi incrivel, a gente foi no shopping, e tava muito, muito, muiito frio, porem eu tava de moletom, mas a bonita não tava. Então eu, como cavalheiro que sou, dei meu moletom pra ela e fiquei tremendo de frio depois (sério), no entanto ela me abraçou e eu fiquei quentinho. Ainda mais ela ficou linda com meu moletom, então eu podia ta morrendo de frio, no fim das contas seria muito confortavel morrer com ela de moletom sendo minha ultima lembrança.</p>
                            <div>
                                <p>07/08/2021</p>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="card-photo">
                    <h2>O dia do meu aniversário</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="3" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/meuaniversario-images.png" alt="Fotos tiradas no aniversário de Fernando." onclick="Modal.toggleModal(2)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Eu não sou uma pessoa que gosta de comemorar muitas datas, não é que eu não goste, porem eu não costumo fazer algo grande, nos meus aniversários eu costumava ir pra casa dos meus amigos, comprar algumas pizzas e simplesmente passar ao lado das pessoas de quem eu gosto. No entanto eu nunca fui uma pessoa de ficar animado ou ansioso pra datas como meu aniversário. Porem, esse ano, quando ela combinou de passar o meu aniversário comigo, de repente eu me vi tão animado e entusiasmado pra tal data, não pela data, mas porque ia ser incrivel passar meu aniversário ao lado dela. Esse dia foi legal.</p>
                            <div>
                                <p>03/09/2021</p>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="card-photo">
                    <h2>Primeira vez que ela veio em casa</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="1" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/beijinhonabochecha-image.png" alt="Foto de Fernando beijando a bochecha de Luiza." onclick="Modal.toggleModal(3)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Esse foi o dia em que ela conheceu minha mãe, foi incrivel, foi a primeira vez que eu toquei piano pra ela. Mal sabia eu, mas ali era o começo de uma companhia maravilhosa que eu iria ter em todos meus finais de semana, mal sabia eu que a partir daquele dia eu iria começar a contar os dias para ver ela no final de semana.</p>
                            <div>
                                <p>29/08/2021</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-photo">
                    <h2>Aniversário dela</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" style="display: flex; justify-content: center;" slider="1" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/aniversariodela.png" alt="Fotos tiradas no aniversário de Luiza." onclick="Modal.toggleModal(4)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Esse dia foi muito especial, muito porque foi minha primeira vez ne algo que a maioria dos familiares dela também tava. Mas foi muito dahora, foi nesse dia que eu conheci a vó dela, uma pessoa incrivel que eu nunca tinha conversado mas que quando comecei a conversar com ela, eu me senti muito confortavel. Sem falar que foi a primeira vez que eu fui na casa dela.</p>
                            <div>
                                <p>14/08/2021</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-photo">
                    <h2>Eu cerelepe com o oclinhos dela</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="2" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/eucomoclinhodela-images.png" alt="Fotos de Fernando com o óculos de Luiza." onclick="Modal.toggleModal(5)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Essa foto aparentemente não tem nada demais ksksksk é só eu fazendo caretas no espelho com o óculos dela, porem, pra mim essa foto demonstra exatamente o quanto a gente se diverte na presença do outro. De verdade eu a considero minha melhor amiga, mesmo namorando, pois eu me divirto tanto e fico tão feliz quando to com ela. Enfim, eu acho essas fotos maneiras.</p>
                            <div>
                                <p>24/10/2021</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-photo">
                    <h2>Nois assim😬</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="3" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/smile-images.png" alt="Foto dos dois sorrindo." onclick="Modal.toggleModal(6)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Só coloquei essas fotos pra falar desse sorrisin dela, que eu simplesmente acho lindo, no caso o que ta nessa primeira foto é o sorriso dela engraçadinha, que ela fica assim 😬ksksksksk eu de verdade amo esse (sim eu listei todos os tipos diferentes de risadinhas dela), nas outras duas fotos ela ta com o sorrisin dela normal que eu apelidei de "sorriso de gostosa", eu também amo esse!</p>
                            <div>
                                <p>24/10/2021</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-photo">
                    <h2>Nosso bolo manero</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" style="display: flex; justify-content: center;" slider="1" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/bolomanero.jpg" alt="Foto de um bolo" onclick="Modal.toggleModal(7)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">Esse dia foi muito legal, conseguimos fazer um bolo sem explodir a casa. Nós dançamos felizes pela sala, pela cozinha, esse dia tinha tudo pra ser incrivel.</p>
                            <div>
                                <p>13/12/2021</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-photo">
                    <h2>Nossa vespera de natal juntins</h2>
                    <div class="card-content">
                        <div>
                            <div class="carrousel" slider="5" currentSlide="1">
                                <span class="score">1/1</span>
                                <img src="assets/images/natalzin-images.png" alt="Fotos de nós juntos no natal" onclick="Modal.toggleModal(8)">
                            </div>
                        </div>
                        <div class="card-content-text">
                            <p align="justify">O dia em que a gente passou a vespera de natal juntinhos, conversando bobagem até uma hora da madrugada, espero que eu possa viver muitas e muitas datas como essa ao lado dela, eu amei esse dia.</p>
                            <div>
                                <p>24/12/2021</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </section>
    </main>

    <div class="modal-overlay">
        <i class="fas fa-times" onclick="Modal.toggleModal()"></i>
        <div class="modal">
            <i class="fas fa-angle-left" onclick="Modal.previewImg()"></i>
            <div>
                <span class="score">1/1</span>
                <img>
            </div>
            <i class="fas fa-angle-right" onclick="Modal.nextImg()"></i>
        </div>
    </div>

    <footer>
        <p>Desenvolvido por Fernando Dias, todos os direitos reservados&copy;</p>
    </footer>

</body>
</html>