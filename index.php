<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <title>Crack Games</title>
    
    <!-- <base href="https://crackgamess.000webhostapp.com/"> -->
    <base href="http://localhost/lojadejogos/">
    
    
    <link rel="shortcut icon" href="imagens/logo2.png">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body> 
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary_"  id="navbar">

    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
    <img src="imagens/logo3.jpeg" alt=" Crack games" title="crack games">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">LOJA</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="suporte">SUPORTE</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="" data-bs-toggle="dropdown" aria-expanded="false">JOGOS</a>
                <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#">Ghost of Tsushima</a></li>
                <li><a class="dropdown-item" href="#">Ghost of Tsushima</a></li>
                <li><a class="dropdown-item" href="#">Horizon Zero Down</a></li>
                <li><a class="dropdown-item" href="#">Ghost of Tsushima</a></li>
                <li><a class="dropdown-item" href="#">Ghost of Tsushima</a></li>
                <li><a class="dropdown-item" href="#">Ghost of Tsushima</a></li>
                </ul>
            </li>
        </ul>
    
    <a href="cadastre-se" class="btn">
        <strong>cadastre-se</strong>
    </a>
    <a href="login" class="btn">
        <strong>Login</strong>
    </a>
        </div>
    </div>
    </nav>


</header>
<main>
        
    <?php

        if (isset($_GET["param"])) {
            $param = $_GET["param"];  
            // serapar o parametro por /
            $p = explode("/", $param);
            //print_r($p);
        }

        $page = $p[0] ?? "loja";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";

        } else {
            $pagina = "paginas/{$page}.php";
        }   
        
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }

    ?>
    
    </main>

    <footer class="footer">
        <h2 class="text-footer">Redes Sociais</h2>
        <div class="links">
        <a href="https://www.instagram.com/lucas__pedrozo?igsh=ZndteTJiaTB4OTZu">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://github.com/lucas-pedrozo">
        <i class="bi bi-github"></i>
        </a>
        <a href="https://wa.me/qr/OGED4XU6THFTB1">
        <i class="bi bi-whatsapp"></i>
        </a>
        </div>
    </footer>

    <!--codigos javascript-->

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>