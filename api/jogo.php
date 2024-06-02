<?php 

        header("Access-Controla-Allow-Origin: *");
        header("Content-tipe: application/json; charset=utf-8");    

        $game[1] =  array(
            "id"=> 1,
            "banner"=> "imagens/golden-3.png",
            "alt"=> "golden apple",
            "nome"=> "Golden Apple",
            "preco"=> "R$ 26,90",

            "carousel"=> "null",
            "title"=> "Descrição",
            "Descricao"=> "Esse é um jogo de aventura e desafios, nesse jogo seu objetivo é chegar até o final da caverna e coletar uma Maça dourada que tem o poder da imortalidade, boa sorte...",
            "criador"=> "Desenvolvedor: Lucas Pedrozo",
            "data"=> "Data de Lançamento: 29/mar./2024",
            "criadorsite"=> "https://lucas-pedrozo.github.io/portifolio1.0/",

            "jogar"=> "jogo/golden/index.html",

            "requisitos"=> "Requisitos",

            "minimo"=> "Minimo",
            "info-1"=> "Windows",
            "info-2"=> "CPU: Intel core 2Dou E5200",
            "info-3"=> "Memoria: 4 GB de Ram",
            "info-4"=> "Armazenamento: 10 GB Disponive",
            "info-5"=> "GPU: GeForce 9800GTX+ 1 GB de Vram",
            "info-6"=> "DirectX: Versão 10",

            "recomendado"=> "Recomendado",
            "info-7"=> "Windows",
            "info-8"=> "CPU: Intel core 2Dou E5200",
            "info-9"=> "Memoria: 4 GB de Ram",
            "info-10"=> "Armazenamento: 10 GB Disponive",
            "info-11"=> "GPU: GeForce 9800GTX+ 1 GB de Vram",
            "info-12"=> "DirectX: Versão 10",
            
            "comentarios"=> "null"
        );

        $game[2] =  array(
            "id"=> 2,
            "banner"=> "imagens/cat-3.jpg",
            "alt"=> "cat",
            "nome"=> "Cat Game",
            "preco"=> "R$ 37,90",

            "carousel"=> "null",
            "title"=> "Descrição",
            "Descricao"=> "Esse é um jogo de aventura e desafios, nesse jogo seu objetivo é chegar até o final da caverna e coletar uma Maça dourada que tem o poder da imortalidade, boa sorte...",
            "criador"=> "Desenvolvedor: Igor Uggioni",
            "data"=> "Data de Lançamento: 15/mar./2024",
            "criadorsite"=> "null",

            "jogar"=> "jogo/gatgame/index.html",

            "requisitos"=> "Requisitos",

            "minimo"=> "Minimo",
            "info-1"=> "Windows",
            "info-2"=> "CPU: Intel core 2Dou E5200",
            "info-3"=> "Memoria: 4 GB de Ram",
            "info-4"=> "Armazenamento: 10 GB Disponive",
            "info-5"=> "GPU: GeForce 9800GTX+ 1 GB de Vram",
            "info-6"=> "DirectX: Versão 11",

            "recomendado"=> "Recomendado",
            "info-7"=> "Windows",
            "info-8"=> "CPU: Intel core I5 5600k",
            "info-9"=> "Memoria: 8 GB de Ram",
            "info-10"=> "Armazenamento: 10 GB Disponive",
            "info-11"=> "GPU: GeForce GTX 760 2 GB de Vram",
            "info-12"=> "DirectX: Versão 11",
            
            "comentarios"=> "null"
        );

        $game[3] = array(
            "id"=> 3,
            "banner"=> "imagens/the-bird-3.jpg",
            "alt"=> "the bird",
            "nome"=> "The Bird Game",
            "preco"=> "R$ 23,89",

            "carousel"=> "null",
            "title"=> "Descrição",
            "Descricao"=> "Esse é um jogo de aventura e desafios, nesse jogo seu objetivo é chegar até o final da caverna e coletar uma Maça dourada que tem o poder da imortalidade, boa sorte...",
            "criador"=> "Desenvolvedor: João Vitor Barbosa",
            "data"=> "Data de Lançamento: 15/mar./2024",
            "creadorsite"=> "null",

            "jogar"=> "jogo/gatgame/index.html",

            "requisitos"=> "Requisitos",

            "minimo"=> "Minimo",
            "info-1"=> "Windows",
            "info-2"=> "CPU: Intel core 2Dou E5200",
            "info-3"=> "Memoria: 4 GB de Ram",
            "info-4"=> "Armazenamento: 10 GB Disponive",
            "info-5"=> "GPU: GeForce 9800GTX+ 1 GB de Vram",
            "info-6"=> "DirectX: Versão 11",

            "recomendado"=> "Recomendado",
            "info-7"=> "Windows",
            "info-8"=> "CPU: Intel core I5 5600k",
            "info-9"=> "Memoria: 8 GB de Ram",
            "info-10"=> "Armazenamento: 10 GB Disponive",
            "info-11"=> "GPU: GeForce GTX 760 2 GB de Vram",
            "info-12"=> "DirectX: Versão 11",
            
            "comentarios"=> "null"
        );
    
        echo json_encode($game);
        
?>