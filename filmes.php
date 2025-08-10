<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Filmes | Cineverse</title>
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

  <select id="genreSelect">
    <option value="Todos">Todos</option>
    <option value="AcaoAventura">Ação & Aventura</option>
    <option value="Comedia">Comédia</option>
    <option value="FiccaoCientifica">Ficção Científica</option>
    <option value="Drama">Drama</option>
  </select>

  <section class="AcaoAventura">
    <h2>🗺 Ação & Aventura</h2>
    <div class="carrossel-container">
      <button class="seta setaEsquerda" onclick="scrollCarrossel(this, -1)">
        &#10094;
      </button>
      <div class="carrossel">

      </div>
      <button class="seta setaDireita" onclick="scrollCarrossel(this, 1)">
        &#10095;
      </button>
    </div>
  </section>

  <section class="FiccaoCientifica">
    <h2>🥼 Ficção Científica</h2>
    <div class="carrossel-container">
      <button class="seta setaEsquerda" onclick="scrollCarrossel(this, -1)">
        &#10094;
      </button>
      <div class="carrossel">

      </div>
      <button class="seta setaDireita" onclick="scrollCarrossel(this, 1)">
        &#10095;
      </button>
    </div>
  </section>

  <section class="Drama">
    <h2>😭 Drama</h2>
    <div class="carrossel-container">
      <button class="seta setaEsquerda" onclick="scrollCarrossel(this, -1)">
        &#10094;
      </button>
      <div class="carrossel">

      </div>
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

  <footer id="footer">&copy; 2025 Cineverse. Todos os direitos reservados.</footer>

  <script>
    const select = document.getElementById('genreSelect');
    const sections = document.querySelectorAll('section');
    const footer = document.getElementById('footer')

    select.addEventListener('change', () => {
      const selectedGenre = select.value;

      sections.forEach(section => {
        if (selectedGenre === 'Todos') {
          section.classList.remove('hidden');
        } else {
          if (section.classList.contains(selectedGenre)) {
            section.classList.remove('hidden');
          } else {
            section.classList.add('hidden');
          }
        }
      });

      if (selectedGenre !== "Todos") {
        footer.classList.add("footerAlinhado");
      } else {
        footer.classList.remove("footerAlinhado");
      }
    });

    const filmesAcao = [
      {
        titulo: "Indiana Jones e os Caçadores da Arca Perdida",
        ano: 1981,
        classificacao: "12 anos",
        sinopse: "O arqueólogo Indiana Jones precisa impedir que nazistas consigam a Arca da Aliança.",
        imagem: "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTfzBLlHpWlDVIJeuRiarxcjawNdZilGtoUkQ2i_A08-vOjPk29kUq2KmgBoW-HbSc5w_JSQAvBpcI44wS2B8yp872dnjvD0hi_o6lcsQ",
        imagemModal: "https://i.ytimg.com/vi/8A-yxXlmGcM/maxresdefault.jpg",
        diretor: "Steven Spielberg",
        atores: "Harrison Ford, Karen Allen, Paul Freeman",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0082971/awards",
        trailer: "https://www.youtube.com/watch?v=XkkzKHCx154"
      },
      {
        titulo: "Mad Max: Estrada da Fúria",
        ano: 2015,
        classificacao: "16 anos",
        sinopse: "Num mundo pós-apocalíptico, Max se junta a Furiosa para fugir de um tirano e seu exército.",
        imagem: "https://m.media-amazon.com/images/S/pv-target-images/f751f274cb2835ccc6d09ff239383d3824d90fcca561a23c1480d1eb9bdee362.jpg",
        imagemModal: "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTA_ASf2cSzYzUp0k40zorD7fjGGvjTemB0yF_fSBMxx_lo4i3up9qc9bAio7fgmDKptCDvb6Psmn-IS9LbQbJgLqU3qDrzkre4vnhJOg",
        diretor: "George Miller",
        atores: "Tom Hardy, Charlize Theron, Nicholas Hoult",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt1392190/awards",
        trailer: "https://www.youtube.com/watch?v=hEJnMQG9ev8"
      },
      {
        titulo: "Gladiador",
        ano: 2000,
        classificacao: "16 anos",
        sinopse: "Um general romano busca vingança contra o imperador que matou sua família.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT55_OI85Hc0gK5jM7sjp4ITE-jXek24mvPfQ&s",
        imagemModal: "https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2024/06/russell-crowe-gladiador.webp",
        diretor: "Ridley Scott",
        atores: "Russell Crowe, Joaquin Phoenix, Connie Nielsen",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0172495/awards",
        trailer: "https://www.youtube.com/watch?v=owK1qxDselE"
      },
      {
        titulo: "Missão: Impossível - Efeito Fallout",
        ano: 2018,
        classificacao: "14 anos",
        sinopse: "Ethan Hunt e sua equipe correm contra o tempo para evitar uma catástrofe global.",
        imagem: "https://br.web.img3.acsta.net/pictures/18/05/14/17/09/5117345.jpg",
        imagemModal: "https://cadernopop.com.br/wp-content/uploads/2025/05/missaoimpossivelfallout.jpg",
        diretor: "Christopher McQuarrie",
        atores: "Tom Cruise, Henry Cavill, Rebecca Ferguson",
        episodios: "6º filme da franquia",
        premios: "https://www.imdb.com/title/tt4912910/awards",
        trailer: "https://www.youtube.com/watch?v=wb49-oV0F78"
      },
      {
        titulo: "John Wick 4: Baba Yaga",
        ano: 2023,
        classificacao: "18 anos",
        sinopse: "John Wick enfrenta a Alta Cúpula para conquistar sua liberdade definitiva.",
        imagem: "https://cinemaweb.com.br/wp-content/uploads/2024/09/poster-john-wick-4-baba-yaga-2023.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_tPQ67UM9PBIJ3GvwazVVSlc9qK9hmUBeeQ&s",
        diretor: "Chad Stahelski",
        atores: "Keanu Reeves, Donnie Yen, Bill Skarsgård",
        episodios: "4º filme da franquia",
        premios: "https://www.imdb.com/title/tt10366206/awards",
        trailer: "https://www.youtube.com/watch?v=qEVUtrk8_B4"
      },
      {
        titulo: "O Senhor dos Anéis: O Retorno do Rei",
        ano: 2003,
        classificacao: "14 anos",
        sinopse: "Frodo e Sam chegam à Montanha da Perdição para destruir o Um Anel.",
        imagem: "https://m.media-amazon.com/images/M/MV5BN2U5OTJiNTQtOTlhMC00MmViLTlkNmItZGFmYzQ4MmEzYzE5XkEyXkFqcGc@._V1_.jpg",
        imagemModal: "https://i.ytimg.com/vi/OQgySPQ5M3Y/maxresdefault.jpg",
        diretor: "Peter Jackson",
        atores: "Elijah Wood, Ian McKellen, Viggo Mortensen",
        episodios: "3º filme da trilogia",
        premios: "https://www.imdb.com/title/tt0167260/awards",
        trailer: "https://www.youtube.com/watch?v=r5X-hFf6Bwo"
      }
    ];

    const filmesFiccao = [
      {
        titulo: "Interestelar",
        ano: 2014,
        classificacao: "12 anos",
        sinopse: "Um grupo de astronautas viaja por um buraco de minhoca em busca de um novo lar para a humanidade.",
        imagem: "https://estantedasala.com/wp-content/uploads/2014/11/interstellar.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm69TbeLGdS43Ir19Eniv4UrSIfhvv-HxGIw&s",
        diretor: "Christopher Nolan",
        atores: "Matthew McConaughey, Anne Hathaway, Jessica Chastain",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0816692/awards",
        trailer: "https://www.youtube.com/watch?v=zSWdZVtXT7E"
      },
      {
        titulo: "Blade Runner 2049",
        ano: 2017,
        classificacao: "16 anos",
        sinopse: "Um jovem blade runner descobre um segredo que pode mudar o futuro da sociedade e o leva a buscar Rick Deckard.",
        imagem: "https://m.media-amazon.com/images/M/MV5BYjA4NjBkOWEtYjllZC00YjY1LWI5YmQtMTMyNDcyNGIzYzFlXkEyXkFqcGc@._V1_.jpg",
        imagemModal: "https://images.mubicdn.net/images/film/156015/cache-176864-1724060770/image-w1280.jpg?size=800x",
        diretor: "Denis Villeneuve",
        atores: "Ryan Gosling, Harrison Ford, Ana de Armas",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt1856101/awards",
        trailer: "https://www.youtube.com/watch?v=gCcx85zbxz4"
      },
      {
        titulo: "Matrix",
        ano: 1999,
        classificacao: "14 anos",
        sinopse: "Um hacker descobre que a realidade como conhecemos é uma simulação controlada por máquinas.",
        imagem: "https://br.web.img2.acsta.net/medias/nmedia/18/91/08/82/20128877.JPG",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTECyyEpqtWL5eYKyekgADE8LWTR1IHKG4OfA&s",
        diretor: "Lana e Lilly Wachowski",
        atores: "Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss",
        episodios: "1º de 4 filmes",
        premios: "https://www.imdb.com/title/tt0133093/awards",
        trailer: "https://www.youtube.com/watch?v=vKQi3bBA1y8"
      },
      {
        titulo: "Duna",
        ano: 2021,
        classificacao: "14 anos",
        sinopse: "O jovem Paul Atreides embarca em uma jornada perigosa para proteger o futuro de seu povo em um planeta desértico.",
        imagem: "https://m.media-amazon.com/images/I/81zN7udGRUL.jpg",
        imagemModal: "https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2021/10/dune_1947.jpg",
        diretor: "Denis Villeneuve",
        atores: "Timothée Chalamet, Zendaya, Rebecca Ferguson",
        episodios: "1º de 2 partes (até agora)",
        premios: "https://www.imdb.com/title/tt1160419/awards",
        trailer: "https://www.youtube.com/watch?v=n9xhJrPXop4"
      },
      {
        titulo: "Gravidade",
        ano: 2013,
        classificacao: "12 anos",
        sinopse: "Dois astronautas ficam presos no espaço após um acidente e precisam lutar para sobreviver.",
        imagem: "https://m.media-amazon.com/images/S/pv-target-images/59944a01eb1efe504369ea42e704d492681d0217d720c8faab012c6ff1abcddf.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtHFqMrioIIJkrE9PLbTUiAoLczlS0rvqkeg&s",
        diretor: "Alfonso Cuarón",
        atores: "Sandra Bullock, George Clooney",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt1454468/awards",
        trailer: "https://www.youtube.com/watch?v=OiTiKOy59o4"
      },
      {
        titulo: "O Predador",
        ano: 1987,
        classificacao: "18 anos",
        sinopse: "Um grupo de soldados é caçado na selva por uma criatura alienígena mortal.",
        imagem: "https://indika.tv/images/filmes9/O-Predador.jpg",
        imagemModal: "https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/7APM7TV33RFPXFMQ2PB4EU4AZA.jpeg?auth=b85fca4f3f7da057a298ac388ac45da1c8726128fcde1d41e53ebb6956ec7783&width=1200&height=628",
        diretor: "John McTiernan",
        atores: "Arnold Schwarzenegger, Carl Weathers, Bill Duke",
        episodios: "1º de uma franquia",
        premios: "https://www.imdb.com/title/tt0093773/awards",
        trailer: "https://www.youtube.com/watch?v=X2hBYGwKh3I"
      }
    ];

    const filmesDrama = [
      {
        titulo: "A Espera de um Milagre",
        ano: 1999,
        classificacao: "16 anos",
        sinopse: "Um guarda de prisão desenvolve uma conexão especial com um prisioneiro com poderes misteriosos.",
        imagem: "https://br.web.img2.acsta.net/medias/nmedia/18/91/66/66/20156966.jpg",
        imagemModal: "https://aventurasnahistoria.com.br/media/uploads/2024/04/a-espera-de-um-milagre.jpg",
        diretor: "Frank Darabont",
        atores: "Tom Hanks, Michael Clarke Duncan",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0120689/awards",
        trailer: "https://www.youtube.com/watch?v=Ki4haFrqSrw"
      },
      {
        titulo: "Clube da Luta",
        ano: 1999,
        classificacao: "18 anos",
        sinopse: "Um insatisfeito trabalhador de escritório encontra um vendedor de sabão excêntrico e formam um clube secreto de luta.",
        imagem: "https://br.web.img3.acsta.net/medias/nmedia/18/90/95/96/20122166.jpg",
        imagemModal: "https://m.media-amazon.com/images/S/pv-target-images/2cf219146cfce810a1edef5fb000bbe3b9f51dd97588a06a3636b208443ace83._SX1080_FMjpg_.jpg",
        diretor: "David Fincher",
        atores: "Brad Pitt, Edward Norton, Helena Bonham Carter",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0137523/awards",
        trailer: "https://www.youtube.com/watch?v=SUXWAEX2jlg"
      },
      {
        titulo: "Forrest Gump",
        ano: 1994,
        classificacao: "12 anos",
        sinopse: "A comovente trajetória de Forrest, um homem simples que vive momentos marcantes da história americana.",
        imagem: "https://m.media-amazon.com/images/M/MV5BNDYwNzVjMTItZmU5YS00YjQ5LTljYjgtMjY2NDVmYWMyNWFmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0tZAO1xunCW7YtJSCZyxHzlftQZgLGYDb_w&s",
        diretor: "Robert Zemeckis",
        atores: "Tom Hanks, Robin Wright",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0109830/awards",
        trailer: "https://www.youtube.com/watch?v=bLvqoHBptjg"
      },
      {
        titulo: "Os Infiltrados",
        ano: 2006,
        classificacao: "18 anos",
        sinopse: "Um policial disfarçado e um informante da máfia tentam descobrir a identidade um do outro.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmBdresa5jNTeuuhs0HmWYv8X-glQaLV1eQg&s",
        imagemModal: "https://m.media-amazon.com/images/S/pv-target-images/bfb748fae78a73d31aeb4d05b3ca9fa5d03dd0f8347c4206125dcd5308087b7b.jpg",
        diretor: "Martin Scorsese",
        atores: "Leonardo DiCaprio, Matt Damon, Jack Nicholson",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0407887/awards",
        trailer: "https://www.youtube.com/watch?v=iojhqm0JTW4"
      },
      {
        titulo: "O Pianista",
        ano: 2002,
        classificacao: "16 anos",
        sinopse: "Durante a Segunda Guerra, um pianista judeu luta para sobreviver à ocupação nazista em Varsóvia.",
        imagem: "https://m.media-amazon.com/images/I/616+OcggFIS._AC_UF894,1000_QL80_.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu3yk1h0qwxwpgjSYwrRORTTAjIaIJ0ZnA_Q&s",
        diretor: "Roman Polanski",
        atores: "Adrien Brody, Thomas Kretschmann",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt0253474/awards",
        trailer: "https://www.youtube.com/watch?v=BFwGqLa_oAo"
      },
      {
        titulo: "12 Anos de Escravidão",
        ano: 2013,
        classificacao: "16 anos",
        sinopse: "Um homem negro livre é sequestrado e vendido como escravo no sul dos EUA antes da Guerra Civil.",
        imagem: "https://m.media-amazon.com/images/S/pv-target-images/51f31945b8c2e67fcf1d343866dd1d66f5789ca0df7dd7539a1f19a98a40e299.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnTJ1vGuKp2V-e-MheX_PNFzTUxFplPLle0A&s",
        diretor: "Steve McQueen",
        atores: "Chiwetel Ejiofor, Michael Fassbender, Lupita Nyong'o",
        episodios: "Filme único",
        premios: "https://www.imdb.com/title/tt2024544/awards",
        trailer: "https://www.youtube.com/watch?v=vUQNjfhlREk"
      }
    ];


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
      gerarFilmes("section:nth-of-type(1)", filmesAcao);
      gerarFilmes("section:nth-of-type(2)", filmesFiccao);
      gerarFilmes("section:nth-of-type(3)", filmesDrama);
    });
  </script>
</body>

</html>