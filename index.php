<?php 

    session_start();

    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
        header('location: home.php');
    } 

?>

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
    <link rel="stylesheet" href="css/index.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/341d4ca1c0.js" crossorigin="anonymous"></script>

    <!--JavaScript-->
    <script src="scripts/index.js" defer></script>

    <title>Nosso Lugar secreto</title>
</head>
<body>

    <main class="container-password">
        <div class="password-area">
            <div class="logo">
                <img src="assets/logo.png" alt="Nosso Lugar Secreto">
            </div>
            <div class="password-form">
                <form action="validate_login.php" method="post">
                    <div class="password">
                        <div>
                            <label for="password">
                                <i class="fas fa-lock"></i>
                            </label>
                            <input name="password" id="password" type="password" placeholder="Digite a senha maneira!">
                        </div>
                        <i class="far fa-eye" id="exibir"></i>
                    </div>

                    <?php
                        if (isset($_GET['login'])) {
                            switch($_GET['login']) {
                                case 'error':                    
                    ?>

                    <p class="error">Senha incorreta!</p>

                    <?php 
                                break;
                            case 'error2':
                    ?>

                    <p class="error">Digite a senha para acessar!</p>

                    <?php 
                                break;
                            }
                        }
                    ?>

                    <div class="button-submit">
                        <button type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer">
            <p>Desenvolvido por Fernando Dias&copy;</p>
        </div>
    </main>
</body>
</html>