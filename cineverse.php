<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cineverse</title>
  <link rel="stylesheet" href="Assets/css/style.css" />
</head>

<body>
  <header>
    <nav class="header-content">
      <a href="cineverse.html" class="logo">🎬 Cineverse</a>
      <div class="links">
        <a href="filmes.html">Filmes</a>
        <a href="series.html">Séries</a>
      </div>
      <div class="usuario">
        <div class="icone-usuario" onclick="toggleMenu()">
          <span>👤</span>
        </div>
        <div class="menu-suspenso" id="menuSuspenso">
          <a href="perfil.html">Perfil</a>
          <a href="config.html">Configurações</a>
          <a href="index.html">Encerrar sessão</a>
        </div>
      </div>
    </nav>
  </header>

  <section id="slider" class="slider">
    <div class="slider-content">
      <h1 id="slider-title">Duna: Parte 2</h1>
    </div>
  </section>

  <section>
    <h2>🚀 Lançamentos</h2>
    <div class="carrossel-container">
      <button class="seta setaEsquerda" onclick="scrollCarrossel(this, -1)">
        &#10094;
      </button>
      <div class="carrossel"></div>
      <button class="seta setaDireita" onclick="scrollCarrossel(this, 1)">
        &#10095;
      </button>
    </div>
  </section>

  <section>
    <h2>🏆 Filmes que ganharam Oscar</h2>
    <div class="carrossel-container">
      <button class="seta setaEsquerda" onclick="scrollCarrossel(this, -1)">
        &#10094;
      </button>
      <div class="carrossel"></div>
      <button class="seta setaDireita" onclick="scrollCarrossel(this, 1)">
        &#10095;
      </button>
    </div>
  </section>

  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="fecharModal()">&times;</span>
      <img id="modal-img" src="" alt="Capa do Filme" />
      <h2 id="modal-titulo"></h2>
      <p id="modal-info"></p>
      <p id="modal-diretor"></p>
      <p id="modal-atores"></p>
      <p id="modal-sinopse"></p>
      <a id="modal-premio" href="#"></a>
      <div class="botoes">
        <a id="link-trailer" href="#" target="_blank">📺 Ver trailer</a>
      </div>
    </div>
  </div>

  <footer>&copy; 2025 Cineverse. Todos os direitos reservados.</footer>

  <script>
    const destaques = [
      {
        titulo: "Duna: Parte 2",
        imagem:
          "https://ingresso-a.akamaihd.net/prd/img/movie/duna-parte-2/04a173f7-6d58-49d3-91de-20f6a07e9513.webp",
        link: "https://www.youtube.com/watch?v=Way9Dexny3w",
      },
      {
        titulo: "Oppenheimer",
        imagem:
          "https://www.thebanner.org/sites/default/files/styles/article_detail_header/public/2023-08/MM-1207%20Oppenheimer.jpg?itok=0U-jOPJC",
        link: "https://www.youtube.com/watch?v=F3OxA9Cz17A&t=21s",
      },
      {
        titulo: "Tudo em Todo Lugar ao Mesmo Tempo",
        imagem:
          "https://resenhandosonhos.com/wp-content/uploads/2023/01/tudo-em-todo-o-lugar-ao-mesmo-tempo-capa-920x530.png",
        link: "https://www.youtube.com/watch?v=kULcXm9V7aY",
      },
    ];
    const filmesLancamento = [
      {
        titulo: "Sentimental Value",
        tipo: "Filme",
        ano: 2025,
        classificacao: "16 anos",
        sinopse: "Duas irmãs se reconectam com seu pai cineasta após a morte da mãe, explorando traumas familiares e reconciliação.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMF3DoXj2jL06TzaLS2HhrtfQQS-W-0blMIA&s",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgaj88ruXMsz3cqBtbVx1aMrsbYqiqJCd_xg&s",
        diretor: "Joachim Trier",
        atores: "Renate Reinsve, Stellan Skarsgård, Elle Fanning",
        episodios: "Filme único",
        premios: "https://decider.com/2025/05/22/joachim-trier-sentimental-value-movie-review-cannes-film-festival-2025/",
        trailer: "https://www.youtube.com/watch?v=example"
      },
      {
        titulo: "Vitória",
        tipo: "Filme",
        ano: 2025,
        classificacao: "12 anos",
        sinopse: "Baseado na história real de Joana Zeferino da Paz, que denunciou atividades criminosas em sua comunidade.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOCFosPV49U2NtMpNGpY1Llwu9D-lvSBDMvw&s",
        imagemModal: "https://s2-g1.glbimg.com/noYncBuKZ198BU1BOo7G1_VCAS4=/1920x0/filters:format(jpeg)/https://i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2025/x/2/mZrFRqTwCAnsQw69MZAw/vitoria-foto1.jpg",
        diretor: "Diretor Brasileiro",
        atores: "Fernanda Montenegro",
        episodios: "Filme único",
        premios: "https://pt.wikipedia.org/wiki/Vit%C3%B3ria_%28filme%29",
        trailer: "https://www.youtube.com/watch?v=example"
      },
      {
        titulo: "Missão: Impossível – O Acerto Final",
        tipo: "Filme",
        ano: 2025,
        classificacao: "14 anos",
        sinopse: "O agente Ethan Hunt enfrenta sua missão mais desafiadora em uma corrida contra o tempo para salvar o mundo.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkwuFveHXwLBUwtjRu7e1yDYfFIwmwcMNM9g&s",
        imagemModal: "https://universodosfilmes.com.br/wp-content/uploads/2024/11/Missao-Impossivel-O-Acerto-Final.jpg",
        diretor: "Christopher McQuarrie",
        atores: "Tom Cruise, Hayley Atwell",
        episodios: "Filme único",
        premios: "https://www.oficinadanet.com.br/entretenimento/61854-lancamentos-filmes-cinema-22-maio-2025",
        trailer: "https://www.youtube.com/watch?v=example"
      },
      {
        titulo: "Lilo & Stitch (Live-action)",
        tipo: "Filme",
        ano: 2025,
        classificacao: "Livre",
        sinopse: "Uma jovem havaiana adota um alienígena fugitivo, formando uma amizade inusitada e aprendendo sobre 'ohana'.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYsDjI7A4lADf5wYTXnNM0Fqq7yFF-KauI8Q&s",
        imagemModal: "https://sm.ign.com/t/ign_br/video/l/lilo-stitc/lilo-stitch-official-trailer_h3yt.640.png",
        diretor: "Diretor",
        atores: "Atores",
        episodios: "Filme único",
        premios: "https://olhardigital.com.br/2025/05/22/cinema-e-streaming/cinema-lancamentos-de-filmes-da-semana-22-de-maio/",
        trailer: "https://www.youtube.com/watch?v=example"
      },
      {
        titulo: "Alien: Earth",
        tipo: "Série",
        ano: 2025,
        classificacao: "16 anos",
        sinopse: "Prequela da franquia Alien, explorando os primeiros encontros da humanidade com os xenomorfos.",
        imagem: "https://m.media-amazon.com/images/M/MV5BNTI5NDBmODctOGRlOS00NGM5LTkyNzctZTZhOWU3YzA5Zjc3XkEyXkFqcGc@._V1_.jpg",
        imagemModal: "https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/01/Alien-Earth.png?w=1024",
        diretor: "Diretor",
        atores: "Atores",
        episodios: "1ª temporada",
        premios: "https://time.com/7285497/most-anticipated-tv-shows-summer-2025/",
        trailer: "https://www.youtube.com/watch?v=example"
      },
    ]
    const filmesOscar = [
      {
        titulo: "O Senhor dos Anéis: O Retorno do Rei",
        ano: 2003,
        classificacao: "14 anos",
        sinopse: "A batalha final pela Terra Média enquanto Frodo e Sam avançam para destruir o Um Anel.",
        imagem: "https://upload.wikimedia.org/wikipedia/pt/0/0d/EsdlaIII.jpg",
        imagemModal: "https://i.ytimg.com/vi/OQgySPQ5M3Y/maxresdefault.jpg",
        diretor: "Peter Jackson",
        atores: "Elijah Wood, Viggo Mortensen, Ian McKellen",
        episodios: "Filme único",
        premios: "11 Oscars, incluindo Melhor Filme",
        trailer: "https://www.youtube.com/watch?v=r5X-hFf6Bwo"
      },
      {
        titulo: "Indiana Jones e os Caçadores da Arca Perdida",
        ano: 1981,
        classificacao: "12 anos",
        sinopse: "O arqueólogo Indiana Jones tenta impedir que nazistas encontrem a Arca da Aliança.",
        imagem: "https://br.web.img3.acsta.net/medias/nmedia/18/91/97/58/20172484.jpg",
        imagemModal: "https://rollingstone.com.br/media/_versions/indiana_jones_arca_perdida_reproducao_widelg.jpg",
        diretor: "Steven Spielberg",
        atores: "Harrison Ford, Karen Allen",
        episodios: "Filme único",
        premios: "5 Oscars técnicos",
        trailer: "https://www.youtube.com/watch?v=XkkzKHCx154"
      },
      {
        titulo: "Corra!",
        ano: 2017,
        classificacao: "16 anos",
        sinopse: "Um jovem negro visita a família da namorada branca e descobre segredos assustadores.",
        imagem: "https://br.web.img3.acsta.net/pictures/17/04/19/21/08/577190.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVJr2FuHUDRq8Tke7A9LuMdvnhjS9SO3o2Vw&s",
        diretor: "Jordan Peele",
        atores: "Daniel Kaluuya, Allison Williams",
        episodios: "Filme único",
        premios: "Oscar de Melhor Roteiro Original",
        trailer: "https://www.youtube.com/watch?v=DzfpyUB60YY"
      },
      {
        titulo: "O Poderoso Chefão",
        ano: 1972,
        classificacao: "18 anos",
        sinopse: "A saga da família mafiosa Corleone e sua luta pelo poder.",
        imagem: "https://ingresso-a.akamaihd.net/prd/img/movie/o-poderoso-chefao-50-anos/008274f7-a76d-484f-8b5b-1c639c2ce46b.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSGCq8kdDTcITZwTKJho1Ptv-LP5ildWOc7A&s",
        diretor: "Francis Ford Coppola",
        atores: "Marlon Brando, Al Pacino",
        episodios: "Filme único",
        premios: "3 Oscars, incluindo Melhor Filme",
        trailer: "https://www.youtube.com/watch?v=sY1S34973zA"
      },
      {
        titulo: "Titanic",
        ano: 1997,
        classificacao: "12 anos",
        sinopse: "O romance de Jack e Rose a bordo do famoso navio Titanic.",
        imagem: "https://upload.wikimedia.org/wikipedia/pt/2/22/Titanic_poster.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx8RrMCgLd_qQx8hJLc2XWpugzvYqrBTeBdg&s",
        diretor: "James Cameron",
        atores: "Leonardo DiCaprio, Kate Winslet",
        episodios: "Filme único",
        premios: "11 Oscars, incluindo Melhor Filme",
        trailer: "https://www.youtube.com/watch?v=CHekzSiZjrY"
      }
    ];


    const slider = document.getElementById("slider");
    const sliderTitle = document.getElementById("slider-title");
    let slideAtual = 0;

    slider.style.backgroundImage = `url('${destaques[0].imagem}')`;
    sliderTitle.textContent = destaques[0].titulo;

    function trocarSlide() {
      slideAtual = (slideAtual + 1) % destaques.length;
      const destaque = destaques[slideAtual];
      slider.style.backgroundImage = `url('${destaque.imagem}')`;
      sliderTitle.textContent = destaque.titulo;
    }

    setInterval(trocarSlide, 5000);

    function toggleMenu() {
      const menu = document.getElementById("menuSuspenso");
      menu.style.display = menu.style.display === "block" ? "none" : "block";
    }

    window.addEventListener("click", function (event) {
      const menu = document.getElementById("menuSuspenso");
      const icon = document.querySelector(".icone-usuario");

      if (!icon.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = "none";
      }
    });

    function abrirModal(filme) {
      document.getElementById("modal-img").src = filme.imagemModal;
      document.getElementById("modal-titulo").textContent = filme.titulo;
      document.getElementById(
        "modal-info"
      ).textContent = `${filme.ano} • ${filme.classificacao}`;
      document.getElementById("modal-diretor").textContent =
        "Diretor: " + filme.diretor;
      document.getElementById("modal-atores").textContent =
        "Atores Principais: " + filme.atores;
      document.getElementById("modal-sinopse").textContent =
        "Sinopse: " + filme.sinopse;
      if (filme.premios !== "") {
        document.getElementById("modal-premio").textContent =
          "Premios e indicações";
        document.getElementById("modal-premio").href = filme.premios;
      }
      document.getElementById("link-trailer").href = filme.trailer;
      document.getElementById("modal").style.display = "flex";
    }

    function fecharModal() {
      document.getElementById("modal").style.display = "none";
      filme.premios = "";
    }

    function scrollCarrossel(botao, direcao) {
      const container = botao.parentElement.querySelector(".carrossel");
      const larguraItem = container.querySelector(".filme").offsetWidth + 16;
      container.scrollBy({
        left: larguraItem * direcao,
        behavior: "smooth",
      });
    }

    function gerarFilmes(sectionSelector, filmes) {
      const container = document.querySelector(
        sectionSelector + " .carrossel"
      );
      filmes.forEach((filme) => {
        const div = document.createElement("div");
        div.className = "filme";
        div.innerHTML = `
      <img src="${filme.imagem}" alt="${filme.titulo
          }" onclick='abrirModal(${JSON.stringify(filme)})' />
      <div class="filme-info">
        <strong>${filme.titulo}</strong><br/>
        ${filme.ano} • ${filme.classificacao}
      </div>`;
        container.appendChild(div);
      });
    }

    document.addEventListener("DOMContentLoaded", () => {
      gerarFilmes("section:nth-of-type(2)", filmesLancamento);
      gerarFilmes("section:nth-of-type(3)", filmesOscar);
    });
  </script>
</body>

</html>