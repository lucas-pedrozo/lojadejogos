<div class="carrosel-desk" data-aos="fade" data-aos-duration="600">
  <div id="carouselExampleCaptions" class="carousel slide">


    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="jogo/ghost"><img src="imagens/ghost-2.jpg" class="d-block w-100" alt="Ghost of Tsushima"></a>
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Ghost of Tsushima</h5> -->
          <!-- <p>Uma tempestade se aproxima. Vivencie a experiência completa de Ghost of Tsushima Versão do Diretor no PC e forje seu próprio caminho neste jogo de ação e aventura de mundo aberto para descobrir suas maravilhosas surpresas. Trazido pela Sucker Punch Productions, Nixxes Software e...</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <a href="jogo/hollow"><img src="imagens/hollow-2.jpg" class="d-block w-100" alt="Hollow Knight"></a>
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Hollow Knight</h5> -->
          <!-- <p>Forje seu caminho em Hollow Knight! Uma aventura de ação épica em um vasto reino arruinado de insetos e heróis. Explore cavernas serpenteantes, lute contra criaturas malignas e alie-se a insetos bizarros num estilo clássico 2D desenhado à mão.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <a href="jogo/horizon"><img src="imagens/horizon-2.jpg" class="d-block w-100" alt="Horizon Zero Down"></a>
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Horizon Zero Down</h5> -->
          <!-- <p>Forje seu caminho em Hollow Knight! Uma aventura de ação épica em um vasto reino arruinado de insetos e heróis. Explore cavernas serpenteantes, lute contra criaturas malignas e alie-se a insetos bizarros num estilo clássico 2D desenhado à mão.</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="carrosel-mobile" data-aos="fade" data-aos-duration="600">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="jogo/ghost"><img src="imagens/ghost-1.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="jogo/hollow"><img  src="imagens/hollow-1.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="jogo/horizon"><img src="imagens/horizon-1.jpg" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<section class="conteiner-global">

  <!-- titulo -->
  <h1 data-aos="fade-right" data-aos-duration="400">Lançamentos</h1>

  <!-- card jogo com php + API -->
  <div class="card-flex">

    <!-- php para trazer os jogos da API -->
    <?php
    $dadosApi = file_get_contents("http://localhost/lojadejogos/api/jogo.php");
    $dadosApi = json_decode($dadosApi);

    foreach ($dadosApi as $dados) {
      ?>
      <div class="card-info" data-aos="fade-up" data-aos-duration="400">
        <a href="dados/<?= $dados->id ?>"><img src="<?php echo $dados->banner ?>" alt="<?php echo $dados->alt ?>"></a>
        <div class="card-descricao">
          <p>
            <?php echo $dados->nome ?>
          </p>
          <span>
            <p>
              <?php echo $dados->preco ?>
            </p>
          </span>
        </div>
      </div>
      <?php
    };
    ?>
  </div>

  <a href="jogo/horizon"> <img src="imagens/horizon-2.jpg" alt="minecraft Dungeons" class="banner" data-aos="fade-up"
      data-aos-duration="400"></a>

  <h2 class="lancamento" data-aos="fade-right" data-aos-duration="400">Jogos Dispoviveis</h2>
  <!-- jogos de demonstração -->
  <!-- cards de jogos -->
  <div class="card-flex">

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="jogo/ghost"> <img src="imagens/ghost-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <p>Ghost of Tsushima</p>
        <span>
          <p>R$ 249,90</p>
        </span>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="jogo/hollow"> <img src="imagens/hollow-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <p>Hollow Knight</p>
        <span>
          <p>R$ 56,99</p>
        </span>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="jogo/horizon"> <img src="imagens/horizon-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <p>Horizon Zero Dows</p>
        <span>
          <p>R$ 199,90</p>
        </span>
      </div>
    </div>

    <div class="card-flex">

    <!-- php para trazer os jogos da API -->
    <?php
    $dadosApi = file_get_contents("http://localhost/lojadejogos/api/jogo.php");
    $dadosApi = json_decode($dadosApi);

    foreach ($dadosApi as $dados) {
      ?>
      <div class="card-info" data-aos="fade-up" data-aos-duration="400">
        <a href="dados/<?= $dados->id ?>"><img src="<?php echo $dados->banner ?>" alt="<?php echo $dados->alt ?>"></a>
        <div class="card-descricao">
          <p>
            <?php echo $dados->nome ?>
          </p>
          <span>
            <p>
              <?php echo $dados->preco ?>
            </p>
          </span>
        </div>
      </div>
      <?php
    };
    ?>
  </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="null"> <img src="imagens/islets-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <p>Islets</p>
        <span>
          <p>R$ 46,99</p>
        </span>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="null"> <img src="imagens/minecraft-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <p>Minecraft Dungeons</p>
        <span>
          <p>R$ 47,99</p>
        </span>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="null"> <img src="imagens/hogwarts-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <p>Hogwarts Legacy</p>
        <span>
          <p>R$ 192,78</p>
        </span>
      </div>
    </div>

  </div>
</section>