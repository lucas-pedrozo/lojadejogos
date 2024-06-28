<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
<div class="conteiner">

        <img src="imagens/banner-login.png" data-aos="fade-right" data-aos-duration="400">

<div class="login" data-aos="fade"  data-aos-easing="ease-in-out" >
<h2 data-aos="fade-up" data-aos-duration="400">Cadastre-se</h2>
<form method="post" action=" login">
    <div class="form1">
            <label for="text" data-aos="fade-up" data-aos-duration="500">Email:</label>
            <input type="email" name="email" id="email" class="required" oninput="emailValidate()" required size="25" data-aos="fade-up" data-aos-duration="500" placeholder="Endereço de Email:" >
            <span class="span-required" style="display: none; color: red;">Digite um email valido</span>
    </div>
</br>
    <div class="form1">
            <label for="text" data-aos="fade-up" data-aos-duration="500">Nome completo:</label>
            <input type="text" name="nome" id="nome" class="required" oninput="nomeValidate()" required size="25" data-aos="fade-up" data-aos-duration="500" placeholder="Digite seu nome:">
            <span class="span-required" style="display: none; color: red;" >Deve ter pelo 3 digitos </span>
    </div>
</br>
    <div class="form1">
            <label for="text" data-aos="fade-up"  data-aos-duration="500">Senha:</label>
            <input type="password" name="Number" class="required" oninput="mainPasswordValidate()" required id="senha" size="25"  data-aos="fade-up" data-aos-duration="500" placeholder="Digite sua senha:">
            <span class="span-required"style="display: none; color: red;" >Deve ter pelo menos 8 digetos </span>
    </div>
</br>
    <div class="form1">
                <label for="text" data-aos="fade-up" data-aos-duration="500">Confirme sua Senha:</label>
                <input type="password" name="Number" class="required" oninput="mainPasswordValidate2()" requiredid="senha" size="25" data-aos="fade-up" data-aos-duration="500" placeholder="Digite novamente:">
                <span class="span-required"style="display: none; color: red;" >Senha senha incorreta</span>
        </div>
</br>
    <div class="botao-flex" data-aos="fade-up">
        <button type="submit "class="botao">Confimar</button>     
    </div>
 </form>

 
</div>


</div>
<p>As informações usadas para pre encher o formulario de login ou cadastro será usada para para melhorar sua experiência do usuario, suas informações seram protegidas em nosso sistema.</p>
</body>
<script src="js/cadastro.js"></script>
</html>