<section class="conteiner-global">

  <?php
  $id = $p[1] ?? NULL;
  $dadosApi = file_get_contents("http://localhost/lojadejogos/api/jogo.php/");

  $dadosApi = json_decode($dadosApi);

  $dados = $dadosApi->$id;



  ?>

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-aos="fade"
    data-aos-duration="500">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo $dados->carousel1 ?>" class="d-block w-100" alt="jogo">
      </div>
      <div class="carousel-item">
        <img src="<?php echo $dados->carousel2 ?>" class="d-block w-100" alt="jogo">
      </div>
      <div class="carousel-item">
        <img src="<?php echo $dados->carousel3 ?>" class="d-block w-100" alt="jogo">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="descricao" data-aos="fade-up" data-aos-duration="400">
    <h4> <?php echo $dados->title ?> </h4>

    <p class="historia"> <?php echo $dados->Descricao ?> </p>

    <p><span>Desenvolvedor:</span> <?php echo $dados->criador ?> </p>

    <p><span>Data de Lançamento:</span> <?php echo $dados->data ?></p>

    <div class="dev">
      <a href="<?php echo $dados->criadorsite ?>">Site do Desenvolvedor</a>
    </div>
  </div>
  <div class="link" data-aos="fade-up" data-aos-duration="400">
    <a href="<?php echo $dados->jogar ?>" class="link-jogue">Jogue Agora</a>
  </div>

  <h4 class="text-requisito" data-aos="fade-right" data-aos-duration="300">Requisitos</h4>

  <div class="requisitos-flex">
    <div class="requisitos" data-aos="fade-up" data-aos-duration="400">
      <h4>Minimo</h4>
      <p class="sistema">Windows</p>
      <p><span>CPU:</span> <?php echo $dados->info1 ?></p>
      <p><span>Memoria:</span> <?php echo $dados->info2 ?></p>
      <p><span>Armazenamento:</span> <?php echo $dados->info3 ?></p>
      <p><span>GPU:</span> <?php echo $dados->info4 ?></p>
      <p><span>DirectX:</span> <?php echo $dados->info5 ?></p>
    </div>

    <div class="requisitos" data-aos="fade-up" data-aos-duration="400">
      <h4>Recomendado</h4>
      <p class="sistema">Windows</p>
      <p><span>CPU:</span> <?php echo $dados->info6 ?></p>
      <p><span>Memoria:</span> <?php echo $dados->info7 ?></p>
      <p><span>Armazenamento:</span> <?php echo $dados->info8 ?></p>
      <p><span>GPU:</span> <?php echo $dados->info9 ?></p>
      <p><span>DirectX:</span> <?php echo $dados->info10 ?></p>
    </div>
  </div>
  <!-- comentario -->
  <div class="accordion " id="accordionPanelsStayOpenExample" data-bs-theme="dark" data-aos="fade-up" data-aos-duration="400">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Rodigo dos santos
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>Muito Ruim</strong> <?php echo $dados-> comentario1?>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Luana Patricia
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
      <strong>Bom</strong> <?php echo $dados-> comentario2?>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
     Lucas Pedrozo
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      <strong>Bom</strong> <?php echo $dados-> comentario3?>
      </div>
    </div>
  </div>
</div>

</section>