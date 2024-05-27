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

    <div class="login" data-aos="fade"  data-aos-easing="ease-in-out" >

        <h2 data-aos="fade-up">Login</h2>

        <form method="post" action="index.php">
            <div class="form1">
                <p data-aos="fade-up" data-aos-duration="500">Digite Seu Email:</p>
                    <input type="email" name="nome" id="email" required size="25" title="Digite seu nome Completo" data-aos="fade-up" data-aos-duration="500">
            </div>
        </br>
            <div class="form1">
                <p data-aos="fade-up" data-aos-duration="500" class="margin0">Digite Sua Senha: </p>
                    <input type="password" name="Number" id="senha"required size="25" title="Digite seu nome Completo" data-aos="fade-up" data-aos-duration="500">
            </div>
        </br>
            <div class="botao-flex" data-aos="fade-up">
                <button type="submit" class="botao">Confirmar Login</button>
            </div>
         </form>
    </div>

    <p class="text-login2">
            Atenção suas informações serão
             utilizadas para atribuir uma
              experiencia diacordo com sua
               caracteristica de uso, seja Bem
                vindo ao nosso site de jogos Online.
        </p>

</body>
</html>