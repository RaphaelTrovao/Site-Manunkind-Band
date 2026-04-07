<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ManUnkind</title>
        <link rel="stylesheet" href="css/stsh.css">
    </head>
    <body>
        
        <header>
            <div class="teste">
            <ul class="cabeca">
                <a href="#plataformas"><li class="buts">Músicas</li></a>
                <li class="buts">Agenda</li>
                <li ><img src="assets/img/logo.PNG" alt="" id="logo"></li>
                <li class="buts">Redes sociais</li>
                <li class="buts">Loja</li>
            </ul>
            </div>
        </header>
        <section>
            
        <div class="parent">
            <div class="gradient"></div>
            <img class="img" src="assets/img/manunkin2.png">
            <iframe class="player" data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/track/5Eh6TrPyaYiLOSVAS2d9pB?utm_source=generator" width="50%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
       
        </section>
        <section>
             <div>
            <h1> Ouça-nos: </h1>
            <div class="linha"></div>
        </div>
        <div class="plataformas">
            
            <ul>
               <a href="https://open.spotify.com/intl-pt/artist/3g6jhHbLNxaZAXZoAH5ed7?si=XGvmUwthThqn8WSppXLQyg" target="_blank"> <li id="logos"><img src="assets/img/Spotify.png" id="logmus"></li></a>
                <li id="logos"> <img src="assets/img/Apple_Music.png" id="logmus">Apple Music</li>
                <li id="logos"> <img src="assets/img/Deezer.png" id="logmus">Deezer</li>
            </ul>
        </div>
        </section>
        <section >
            <h1 id="ts">AGENDA:</h1>
            <div class="linha"></div>
            <div class="bxA">
              
                <?php foreach($ts as $tt): ?>
                <div class="c">
                    <img src="<?= $tt['imagem'] ?>" id="cvrs"> 
                    <h2><?= $tt['nome'] ?></h2>
                    <h4 id="tst">DATA: <?= $tt['data'] ?> </h4><h4> LOCAL: <?= $tt['local'] ?></h4>
                    <a href="<?= $tt['link'] ?>" target="_blank" class="botShows">SAIBA MAIS</a>
                    
                </div>
               <?php endforeach; ?>
                
        </div>
            </div>
        </section>
        <section>
            <h1>Redes Sociais</h1>
            <div class="linha"></div>
        </section>
        <section>
            <h1>Loja</h1>
            <div class="linha"></div>
        </section>
        
    </body>
</html>