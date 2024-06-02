<section class="conteiner-global"> 
    <?php
        $dadosApi = file_get_contents("http://localhost/lojadejogos/api/jogo.php");
        $dadosApi = json_decode($dadosApi);

        foreach($dadosApi as $dados) {
            ?>
            <div class="descricao">
                <h4>descriçao</h4>
            </div>
            <?php
        };
    ?>
</section>