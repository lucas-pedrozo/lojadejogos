<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="conteiner">

        <img src="imagens/banner-login.png" data-aos="fade-right" data-aos-duration="400">

        <div class="login" data-aos="fade" data-aos-easing="ease-in-out">
            <h2 data-aos="fade-up" data-aos-duration="400">Login</h2>
            <form method="post" action="index.php">
                <div class="form1">
                    <label for="text" data-aos="fade-up" data-aos-duration="500">Email:</label>
                    <input type="email" name="nome" id="email" required size="25" title="Digite seu nome Completo" data-aos="fade-up" data-aos-duration="500" placeholder="Endereço de Email:">
                </div>
                </br>
                <div class="form1">
                    <label for="text" data-aos="fade-up" data-aos-duration="500">Senha:</label>
                    <input type="password" name="Number" id="senha" required size="25" title="Digite seu nome Completo" data-aos="fade-up" data-aos-duration="500" placeholder="Digite sua senha:">
                </div>
                </br>
                <div class="botao-flex" data-aos="fade-up">
                    <a href="senha">Esqueceu sua senha?</a>
                    <button type="submit" class="botao">Login</button>
                </div>
            </form>
        </div>


    </div>
    <p>As informações usadas para pre encher o formulario de login ou cadastro será usada para para melhorar sua experiência do usuario, suas informações seram protegidas em nosso sistema.</p>
</body>

</html>