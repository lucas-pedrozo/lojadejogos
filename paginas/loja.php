<div class="carrosel-desk">
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="jogo/ghost"><img src="imagens/ghost-2.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="jogo/hollow"><img src="imagens/hollow-2.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="jogo/horizon"><img src="imagens/horizon-2.jpg" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
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
        <a href="jogo/hollow"><img src="imagens/hollow-1.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="jogo/horizon"><img src="imagens/horizon-1.jpg" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
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
          <a href="dados/<?= $dados->id ?>">
            <p>
              <?php echo $dados->nome ?>
            </p>
          </a>
          <a href="dados/<?= $dados->id ?>">
            <span>

              <p>
                <?php echo $dados->preco ?>
              </p>
            </span>
          </a>
        </div>
      </div>
    <?php
    };
    ?>
  </div>

  <a href="jogo/horizon"> <img src="imagens/horizon-2.jpg" alt="minecraft Dungeons" class="banner" data-aos="fade-up" data-aos-duration="400"></a>

  <h2 class="lancamento" data-aos="fade-right" data-aos-duration="400">Jogos Dispoviveis</h2>

  <!-- jogos de demonstração -->
  <!-- cards de jogos -->
  <div class="card-flex">

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="jogo/ghost"> <img src="imagens/ghost-3.jpg" alt="ghost" class="card-img-top"></a>
      <div class="card-descricao">
        <a href="jogo/ghost">
          <p>Ghost of Tsushima</p>
        </a>
        <span>
          <a href="jogo/ghost">
            <p>R$ 249,90</p>
          </a>
        </span>
      </div>

    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="jogo/hollow"> <img src="imagens/hollow-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <a href="jogo/hollow">
          <p>Hollow Knight</p>
        </a>
        <a href="jogo/hollow"> <span>
            <p>R$ 56,99</p>
          </span></a>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="jogo/horizon"> <img src="imagens/horizon-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <a href="jogo/horizon">
          <p>Horizon Zero Dows</p>
        </a>
        <a href="jogo/horizon"> <span>
            <p>R$ 199,90</p>
          </span></a>
      </div>
    </div>

     <!-- php para trazer os jogos da API -->
     <?php
    $dadosApi = file_get_contents("http://localhost/lojadejogos/api/jogo.php");
    $dadosApi = json_decode($dadosApi);

    foreach ($dadosApi as $dados) {
    ?>
      <div class="card-info" data-aos="fade-up" data-aos-duration="400">
        <a href="dados/<?= $dados->id ?>"><img src="<?php echo $dados->banner ?>" alt="<?php echo $dados->alt ?>"></a>
        <div class="card-descricao">
          <a href="dados/<?= $dados->id ?>">
            <p>
              <?php echo $dados->nome ?>
            </p>
          </a>
          <a href="dados/<?= $dados->id ?>">
            <span>

              <p>
                <?php echo $dados->preco ?>
              </p>
            </span>
          </a>
        </div>
      </div>
    <?php
    };
    ?>


    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="null"> <img src="imagens/islets-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <a href="null">
          <p>Islets</p>
        </a>
        <a href="null">
          <span>
            <p>R$ 46,99</p>
          </span></a>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="null"> <img src="imagens/minecraft-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <a href="null">
          <p>Minecraft Dungeons</p>
        </a>
        <a href="null">
          <span>
            <p>R$ 47,99</p>
          </span></a>
      </div>
    </div>

    <div class="card-info" data-aos="fade-up" data-aos-duration="400">
      <!-- imagens do card -->
      <a href="null"> <img src="imagens/hogwarts-3.jpg" alt="ghost"></a>
      <div class="card-descricao">
        <a href="null">
          <p>Hogwarts Legacy</p>
        </a>
        <a href="null"><span>
            <p>R$ 192,78</p>
          </span></a>
      </div>
    </div>

  
  </div>
</section>