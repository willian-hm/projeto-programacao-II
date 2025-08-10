<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Séries | Cineverse</title>
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
    <option value="FiccaoCientifica">Ficção Científica</option>
    <option value="Comedia">Comédia</option>
    <option value="Drama">Drama</option>
    <option value="Anime">Anime</option>
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

  <section class="Comedia">
    <h2>😂 Comédia</h2>
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

  <section class="Anime">
    <h2>🎩 Anime</h2>
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
      <p id="modal-episodios"></p>
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
        titulo: "Stranger Things",
        ano: 2016,
        classificacao: "16 anos",
        sinopse: "Um grupo de crianças enfrenta forças sobrenaturais e experimentos secretos em sua pequena cidade.",
        imagem: "https://br.web.img2.acsta.net/pictures/19/07/10/20/01/2331295.jpg",
        imagemModal: "https://upload.wikimedia.org/wikipedia/commons/3/38/Stranger_Things_logo.png",
        diretor: "Os Irmãos Duffer",
        atores: "Millie Bobby Brown, Finn Wolfhard, David Harbour",
        episodios: "4 temporadas (34 episódios)",
        premios: "https://www.imdb.com/title/tt4574334/awards",
        trailer: "https://www.youtube.com/watch?v=mnd7sFt5c3A"
      },
      {
        titulo: "Breaking Bad",
        ano: 2008,
        classificacao: "18 anos",
        sinopse: "Um professor de química vira produtor de metanfetamina após descobrir um câncer terminal.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn_VUvljXNj8KS4Yn_PO-0W6j0GPR2b525BA&s",
        imagemModal: "https://static.wikia.nocookie.net/assista-series/images/5/56/Breaking-Bad.jpg/revision/latest/scale-to-width-down/1200?cb=20150528205254&path-prefix=pt-br",
        diretor: "Vince Gilligan",
        atores: "Bryan Cranston, Aaron Paul, Anna Gunn",
        episodios: "5 temporadas (62 episódios)",
        premios: "https://www.imdb.com/title/tt0903747/awards",
        trailer: "https://www.youtube.com/watch?v=HhesaQXLuRY"
      },
      {
        titulo: "The Boys",
        ano: 2019,
        classificacao: "18 anos",
        sinopse: "Um grupo de vigilantes enfrenta super-heróis corruptos em um mundo controlado por grandes corporações.",
        imagem: "https://br.web.img3.acsta.net/pictures/19/07/09/14/34/1532536.jpg?coixp=57&coiyp=52",
        imagemModal: "https://clubdofilme.com.br/wp-content/uploads/2022/07/7f6a0ef3-the-boys.jpg",
        diretor: "Eric Kripke",
        atores: "Karl Urban, Jack Quaid, Antony Starr",
        episodios: "4 temporadas (32 episódios — até 2024)",
        premios: "https://www.imdb.com/title/tt1190634/awards",
        trailer: "https://www.youtube.com/watch?v=06rueu_fh30"
      },
      {
        titulo: "Peaky Blinders",
        ano: 2013,
        classificacao: "18 anos",
        sinopse: "A saga da família Shelby, gângsteres na Birmingham do pós-Primeira Guerra Mundial.",
        imagem: "https://m.media-amazon.com/images/I/71q8iEDwKdL._AC_UF350,350_QL80_.jpg",
        imagemModal: "https://m.media-amazon.com/images/M/MV5BMThlOWE3MWEtZjM4Ny00M2FiLTkyMmYtZGY3ZTcyMzM5YmNlXkEyXkFqcGdeQWpnYW1i._V1_.jpg",
        diretor: "Steven Knight",
        atores: "Cillian Murphy, Paul Anderson, Helen McCrory",
        episodios: "6 temporadas (36 episódios)",
        premios: "https://www.imdb.com/title/tt2442560/awards",
        trailer: "https://www.youtube.com/watch?v=oVzVdvGIC7U"
      },
      {
        titulo: "24 Horas",
        ano: 2001,
        classificacao: "16 anos",
        sinopse: "Jack Bauer tenta impedir atentados terroristas em tempo real, cada episódio representa uma hora.",
        imagem: "https://static.wikia.nocookie.net/dublagem/images/a/a5/24_Horas_P%C3%B4ster.jpg/revision/latest?cb=20241219231203&path-prefix=pt-br",
        imagemModal: "https://ogimg.infoglobo.com.br/in/20875936-159-377/FT1086A/INFOCHPDPICT000064691853.jpg",
        diretor: "Joel Surnow, Robert Cochran",
        atores: "Kiefer Sutherland, Mary Lynn Rajskub, Carlos Bernard",
        episodios: "9 temporadas (204 episódios)",
        premios: "https://www.imdb.com/title/tt0285331/awards",
        trailer: "https://www.youtube.com/watch?v=BNl2J5vG-UM"
      },
      {
        titulo: "The Mandalorian",
        ano: 2019,
        classificacao: "12 anos",
        sinopse: "Um caçador de recompensas solitário navega pelos confins da galáxia longe da Nova República.",
        imagem: "https://upload.wikimedia.org/wikipedia/pt/e/e7/The_Mandalorian_season_2_poster.jpg",
        imagemModal: "https://img.odcdn.com.br/wp-content/uploads/2023/03/Destaque-The-Mandalorian.jpeg",
        diretor: "Jon Favreau",
        atores: "Pedro Pascal, Carl Weathers, Gina Carano",
        episodios: "3 temporadas (24 episódios)",
        premios: "https://www.imdb.com/title/tt8111088/awards",
        trailer: "https://www.youtube.com/watch?v=aOC8E8z_ifw"
      }
    ];
    const filmesFiccao = [
      {
        titulo: "Dark",
        ano: 2017,
        classificacao: "16 anos",
        sinopse: "Em uma pequena cidade alemã, o desaparecimento de duas crianças expõe segredos obscuros e viagens no tempo.",
        imagem: "https://br.web.img2.acsta.net/pictures/19/06/11/21/33/0075880.jpg",
        imagemModal: "https://i.ytimg.com/vi/JCCssUOtn2E/maxresdefault.jpg",
        diretor: "Baran bo Odar",
        atores: "Louis Hofmann, Karoline Eichhorn, Lisa Vicari",
        episodios: "3 temporadas (26 episódios)",
        premios: "https://www.imdb.com/title/tt5753856/awards",
        trailer: "https://www.youtube.com/watch?v=rrwycJ08PSA"
      },
      {
        titulo: "Westworld",
        ano: 2016,
        classificacao: "18 anos",
        sinopse: "Um parque futurista para adultos onde androides realistas vivem dramas programados — até que tudo sai do controle.",
        imagem: "https://m.media-amazon.com/images/I/81ZyyQOEeQL._AC_UF894,1000_QL80_.jpg",
        imagemModal: "https://s2-techtudo.glbimg.com/5oqXoQ3tQPlxmBuuYvr7bIfdCYI=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/7/o/11iC99QBekrYmP2b1xmQ/westworld-1.jpg",
        diretor: "Jonathan Nolan, Lisa Joy",
        atores: "Evan Rachel Wood, Thandiwe Newton, Jeffrey Wright",
        episodios: "4 temporadas (36 episódios)",
        premios: "https://www.imdb.com/title/tt0475784/awards",
        trailer: "https://www.youtube.com/watch?v=IuS5huqOND4"
      },
      {
        titulo: "Black Mirror",
        ano: 2011,
        classificacao: "18 anos",
        sinopse: "Cada episódio é uma história independente que explora o lado sombrio da tecnologia e da sociedade moderna.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKsBHfqt8GdxS3SqDI12fDSBe8T3Wg7Q-r-A&s",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKreqCzjpj5nflXRwPcJUc0h3ziinR0JpU8-P_pJO0QoYBZuMHE1TUKay20PjxPPo7ej0&usqp=CAU",
        diretor: "Charlie Brooker",
        atores: "Bryce Dallas Howard, Jon Hamm, Daniel Kaluuya",
        episodios: "6 temporadas (27 episódios)",
        premios: "https://www.imdb.com/title/tt2085059/awards",
        trailer: "https://www.youtube.com/watch?v=jDiYGjp5iFg"
      },
      {
        titulo: "The Expanse",
        ano: 2015,
        classificacao: "16 anos",
        sinopse: "Séculos no futuro, a humanidade colonizou o sistema solar — e conspirações ameaçam a frágil paz entre planetas.",
        imagem: "https://m.media-amazon.com/images/I/91Resn7VD5L._UF894,1000_QL80_.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBGrXwF3o4k_Q2CfNlUVtDKrYXtSJ9Cbq89Q&s",
        diretor: "Mark Fergus, Hawk Ostby",
        atores: "Steven Strait, Dominique Tipper, Shohreh Aghdashloo",
        episodios: "6 temporadas (62 episódios)",
        premios: "https://www.imdb.com/title/tt3230854/awards",
        trailer: "https://www.youtube.com/watch?v=caLji74IIp4"
      },
      {
        titulo: "Severance",
        ano: 2022,
        classificacao: "16 anos",
        sinopse: "Funcionários de uma corporação têm suas memórias divididas entre vida pessoal e profissional em um experimento sinistro.",
        imagem: "https://estudeseries.com/wp-content/uploads/2023/03/severance1.jpg",
        imagemModal: "https://disconecta.com.br/wp-content/uploads/2025/03/severance-apple-tv-plus.jpg.webp",
        diretor: "Ben Stiller",
        atores: "Adam Scott, Patricia Arquette, John Turturro",
        episodios: "1 temporada (9 episódios — renovada)",
        premios: "https://www.imdb.com/title/tt11280740/awards",
        trailer: "https://www.youtube.com/watch?v=xEQP4VVuyrY"
      },
      {
        titulo: "Foundation",
        ano: 2021,
        classificacao: "14 anos",
        sinopse: "Baseada na saga de Isaac Asimov, acompanha cientistas tentando salvar a civilização ao prever a queda de um império galáctico.",
        imagem: "https://image.tmdb.org/t/p/original/3vtXZEG6uFBAulmVZpw0yUp5ae5.jpg",
        imagemModal: "https://universoreverso.com.br/wp-content/uploads/2020/06/foundation-apple-tv.jpg",
        diretor: "David S. Goyer",
        atores: "Jared Harris, Lee Pace, Lou Llobell",
        episodios: "2 temporadas (20 episódios — renovada)",
        premios: "https://www.imdb.com/title/tt0804484/awards",
        trailer: "https://www.youtube.com/watch?v=X4QYV5GTz7c"
      }
    ];

    const filmesComedia = [
      {
        titulo: "Brooklyn Nine-Nine",
        ano: 2013,
        classificacao: "14 anos",
        sinopse: "Um grupo de detetives irreverentes trabalha no fictício 99º distrito policial do Brooklyn.",
        imagem: "https://m.media-amazon.com/images/I/61RwF2h7nZL._AC_UF1000,1000_QL80_DpWeblab_.jpg",
        imagemModal: "https://m.media-amazon.com/images/S/pv-target-images/bd21530bf1cf2bb2cc0b70b03a4f0f544ef612f29d93d014c4a0cb7650b7c33c.jpg",
        diretor: "Dan Goor, Michael Schur",
        atores: "Andy Samberg, Terry Crews, Andre Braugher",
        episodios: "8 temporadas (153 episódios)",
        premios: "https://www.imdb.com/title/tt2467372/awards",
        trailer: "https://www.youtube.com/watch?v=HblwLcAR4r4"
      },
      {
        titulo: "The Office",
        ano: 2005,
        classificacao: "12 anos",
        sinopse: "O cotidiano insano e cômico de funcionários de um escritório de venda de papel na Pensilvânia.",
        imagem: "https://images-na.ssl-images-amazon.com/images/I/71oaJCGFJRL._AC_UL600_SR600,600_.jpg",
        imagemModal: "https://d26oc3sg82pgk3.cloudfront.net/files/media/edit/image/56372/article_full%403x.jpg",
        diretor: "Greg Daniels",
        atores: "Steve Carell, Rainn Wilson, John Krasinski",
        episodios: "9 temporadas (201 episódios)",
        premios: "https://www.imdb.com/title/tt0386676/awards",
        trailer: "https://www.youtube.com/watch?v=Vmb1tqYqyII"
      },
      {
        titulo: "How I Met Your Mother",
        ano: 2005,
        classificacao: "14 anos",
        sinopse: "Ted Mosby conta aos filhos como conheceu a mãe deles, enquanto revive suas aventuras com amigos em Nova York.",
        imagem: "https://m.media-amazon.com/images/I/913t4R2zEmL._AC_UF894,1000_QL80_.jpg",
        imagemModal: "https://disney.images.edge.bamgrid.com/ripcut-delivery/v2/variant/disney/ca99f138-fc43-49e0-8911-d57cba93c2fb/compose?aspectRatio=1.78&format=webp&width=1200",
        diretor: "Carter Bays, Craig Thomas",
        atores: "Josh Radnor, Jason Segel, Cobie Smulders",
        episodios: "9 temporadas (208 episódios)",
        premios: "https://www.imdb.com/title/tt0460649/awards",
        trailer: "https://www.youtube.com/watch?v=BSnIvRv4Q7M"
      },
      {
        titulo: "Parks and Recreation",
        ano: 2009,
        classificacao: "14 anos",
        sinopse: "Leslie Knope, uma funcionária pública entusiasmada, tenta melhorar sua cidade enquanto lida com colegas peculiares.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDNI2xZxvCL-jPIc38ixrmu8HChMgLFzfMBg&s",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnPEsoRHKkBHXD6aPHR2yAdHYs-Jy6IJrJcQ&s",
        diretor: "Greg Daniels, Michael Schur",
        atores: "Amy Poehler, Nick Offerman, Aubrey Plaza",
        episodios: "7 temporadas (125 episódios)",
        premios: "https://www.imdb.com/title/tt1266020/awards",
        trailer: "https://www.youtube.com/watch?v=5U6KZcD2IsA"
      },
      {
    titulo: "The Good Place",
    ano: 2016,
    classificacao: "12 anos",
    sinopse: "Eleanor morre e vai parar por engano em um lugar ideal — mas precisa aprender a ser uma boa pessoa para merecer ficar lá.",
    imagem: "https://m.media-amazon.com/images/I/81dyFJXiXlL.jpg",
    imagemModal: "https://resizing.flixster.com/Tg1UtIZF4XxqHsPiL-8f_b0vYLU=/fit-in/705x460/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p12510467_i_h9_ae.jpg",
    diretor: "Michael Schur",
    atores: "Kristen Bell, Ted Danson, William Jackson Harper",
    episodios: "4 temporadas (50 episódios)",
    premios: "https://www.imdb.com/title/tt4955642/awards",
    trailer: "https://www.youtube.com/watch?v=RfBgT5djaQw"
  }
    ];

    const filmesDrama = [
      {
        titulo: "Breaking Bad",
        ano: 2008,
        classificacao: "18 anos",
        sinopse: "Um professor de química do ensino médio vira fabricante de metanfetamina após ser diagnosticado com câncer terminal.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn_VUvljXNj8KS4Yn_PO-0W6j0GPR2b525BA&s",
        imagemModal: "https://static.wikia.nocookie.net/assista-series/images/5/56/Breaking-Bad.jpg/revision/latest/scale-to-width-down/1200?cb=20150528205254&path-prefix=pt-br",
        diretor: "Vince Gilligan",
        atores: "Bryan Cranston, Aaron Paul, Anna Gunn",
        episodios: "5 temporadas (62 episódios)",
        premios: "https://www.imdb.com/title/tt0903747/awards",
        trailer: "https://www.youtube.com/watch?v=HhesaQXLuRY"
      },
      {
        titulo: "The Sopranos",
        ano: 1999,
        classificacao: "18 anos",
        sinopse: "Tony Soprano tenta equilibrar a vida familiar com seu trabalho como chefe da máfia de Nova Jersey.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNUl_Bw7fdN4SRMg-EJqWgMV1WWTwasbnF2w&s",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWAayh6fnWU6ePt9SKdsssbwaNsatIZdYwbA&s",
        diretor: "David Chase",
        atores: "James Gandolfini, Lorraine Bracco, Edie Falco",
        episodios: "6 temporadas (86 episódios)",
        premios: "https://www.imdb.com/title/tt0141842/awards",
        trailer: "https://www.youtube.com/watch?v=wrN4PHIc-4M"
      },
      {
        titulo: "Chernobyl",
        ano: 2019,
        classificacao: "16 anos",
        sinopse: "Minissérie baseada no desastre nuclear de 1986 e nos esforços heroicos para conter a catástrofe.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUsZzVX4YIPixtJj8_uCVn0RAZ78nqMMSzLA&s",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_BaA_gf7Lzrcd6p1g7APNrgV-m5m1RBiWrA&s",
        diretor: "Johan Renck",
        atores: "Jared Harris, Stellan Skarsgård, Emily Watson",
        episodios: "1 temporada (5 episódios)",
        premios: "https://www.imdb.com/title/tt7366338/awards",
        trailer: "https://www.youtube.com/watch?v=s9APLXM9Ei8"
      },
      {
        titulo: "This Is Us",
        ano: 2016,
        classificacao: "14 anos",
        sinopse: "A história de uma família ao longo de décadas, explorando momentos felizes, difíceis e revelações surpreendentes.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_kk0YS1OSMYGobIoJuNXFty3NJYCDhZ_3NA&s",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUmkfC3E2L0bZPnXjOdYXYQyVoTPe9cijyRw&s",
        diretor: "Dan Fogelman",
        atores: "Milo Ventimiglia, Mandy Moore, Sterling K. Brown",
        episodios: "6 temporadas (106 episódios)",
        premios: "https://www.imdb.com/title/tt5555260/awards",
        trailer: "https://www.youtube.com/watch?v=RfBgT5djaQw"
      },
      {
        titulo: "The Crown",
        ano: 2016,
        classificacao: "16 anos",
        sinopse: "A história da Rainha Elizabeth II desde sua ascensão ao trono britânico até os tempos modernos.",
        imagem: "https://upload.wikimedia.org/wikipedia/pt/thumb/e/e2/The-Crown-Poster-S2.jpg/250px-The-Crown-Poster-S2.jpg",
        imagemModal: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT59luKIIdI17uKygRpnmFaJz944eoVqN6v2A&s",
        diretor: "Peter Morgan",
        atores: "Claire Foy, Olivia Colman, Imelda Staunton",
        episodios: "6 temporadas (60 episódios)",
        premios: "https://www.imdb.com/title/tt4786824/awards",
        trailer: "https://www.youtube.com/watch?v=JWtnJjn6ng0"
      },
      {
        titulo: "Euphoria",
        ano: 2019,
        classificacao: "18 anos",
        sinopse: "Um grupo de adolescentes lida com identidade, trauma, vício e amor em meio a um mundo de redes sociais e ansiedade moderna.",
        imagem: "https://m.media-amazon.com/images/M/MV5BZjVlN2M2N2MtOWViZC00MzIxLTlhZWEtMTIwNDIwMzE3ZWJiXkEyXkFqcGc@._V1_.jpg",
        imagemModal: "https://www.reddit.com/media?url=https%3A%2F%2Fpreview.redd.it%2Fwhy-has-euphoria-season-3-been-delayed-for-two-years-now-v0-kde0mr508fge1.jpeg%3Fauto%3Dwebp%26s%3D2dc9d70d6451e30f3623bd3490e915a1798695f1",
        diretor: "Sam Levinson",
        atores: "Zendaya, Hunter Schafer, Jacob Elordi",
        episodios: "2 temporadas (16 episódios + especiais)",
        premios: "https://www.imdb.com/title/tt8772296/awards",
        trailer: "https://www.youtube.com/watch?v=vuAzkZIiGxI"
      }
    ];

    const filmesAnime = [
      {
        titulo: "Attack on Titan",
        ano: 2013,
        classificacao: "16 anos",
        sinopse: "Humanidade vive cercada por muralhas gigantes para se proteger de titãs devoradores de humanos.",
        imagem: "https://m.media-amazon.com/images/M/MV5BZjliODY5MzQtMmViZC00MTZmLWFhMWMtMjMwM2I3OGY1MTRiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        imagemModal: "https://p2.trrsf.com/image/fget/cf/1200/630/middle/images.terra.com/2022/01/14/attack-on-titan-capa.jpg",
        diretor: "Tetsurō Araki",
        atores: "Yuki Kaji, Yui Ishikawa, Marina Inoue",
        episodios: "4 temporadas (87 episódios)",
        premios: "https://www.imdb.com/title/tt2560140/awards",
        trailer: "https://www.youtube.com/watch?v=MGRm4IzK1SQ"
      },
      {
        titulo: "Death Note",
        ano: 2006,
        classificacao: "16 anos",
        sinopse: "Um estudante encontra um caderno capaz de matar qualquer pessoa cujo nome seja escrito nele.",
        imagem: "https://m.media-amazon.com/images/M/MV5BYTgyZDhmMTEtZDFhNi00MTc4LTg3NjUtYWJlNGE5Mzk2NzMxXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        imagemModal: "https://s2-techtudo.glbimg.com/Un6R-200s9o6XO2nMLYzIno7Tu4=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/g/0/s4BJiLQGSb9USN3vTvAg/death-note-netflix.jpg",
        diretor: "Tetsurō Araki",
        atores: "Mamoru Miyano, Kappei Yamaguchi, Aya Hirano",
        episodios: "1 temporada (37 episódios)",
        premios: "https://www.imdb.com/title/tt0877057/awards",
        trailer: "https://www.youtube.com/watch?v=NlJZ-YgAt-c"
      },
      {
        titulo: "One Piece",
        ano: 1999,
        classificacao: "12 anos",
        sinopse: "Monkey D. Luffy e sua tripulação de piratas exploram os mares em busca do tesouro lendário One Piece.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnLbdp-m7rn0VwdV1l28lKwvIHplpOpDfQQQ&s",
        imagemModal: "https://static.wikia.nocookie.net/onepiece/images/8/87/One_Piece_Anime_Logo.png/revision/latest?cb=20190128234845&path-prefix=pt",
        diretor: "Konosuke Uda",
        atores: "Mayumi Tanaka, Kazuya Nakai, Akemi Okamura",
        episodios: "Mais de 1.000 episódios",
        premios: "https://www.imdb.com/title/tt0388629/awards",
        trailer: "https://www.youtube.com/watch?v=MCb13gqaEZI"
      },
      {
        titulo: "Fullmetal Alchemist: Brotherhood",
        ano: 2009,
        classificacao: "14 anos",
        sinopse: "Dois irmãos alquimistas tentam recuperar seus corpos após um experimento fracassado.",
        imagem: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtg7liJPVES3jgMH48V-ZMLFnsvAsiXgg98Q&s",
        imagemModal: "https://wallpapers.com/images/hd/fullmetal-alchemist-brotherhood-background-578usgme6zid54sd.jpg",
        diretor: "Yasuhiro Irie",
        atores: "Romi Park, Rie Kugimiya, Shinichiro Miki",
        episodios: "1 temporada (64 episódios)",
        premios: "https://www.imdb.com/title/tt1355642/awards",
        trailer: "https://www.youtube.com/watch?v=ClwIj3x24Q4"
      },
      {
        titulo: "Naruto",
        ano: 2002,
        classificacao: "12 anos",
        sinopse: "A jornada de um jovem ninja para se tornar o Hokage, o líder de sua vila.",
        imagem: "https://br.web.img3.acsta.net/c_310_420/pictures/16/04/11/16/56/089875.jpg",
        imagemModal: "https://wallpapers.com/images/hd/naruto-face-hpracgzord0mm3tv.jpg",
        diretor: "Hayato Date",
        atores: "Junko Takeuchi, Noriaki Sugiyama, Chie Nakamura",
        episodios: "220 episódios (Naruto) + 500 episódios (Naruto Shippuden)",
        premios: "https://www.imdb.com/title/tt0409591/awards",
        trailer: "https://www.youtube.com/watch?v=QczGoCmX-pI"
      },
      {
        titulo: "Demon Slayer: Kimetsu no Yaiba",
        ano: 2019,
        classificacao: "16 anos",
        sinopse: "Tanjiro Kamado se torna caçador de demônios para vingar sua família e salvar a irmã.",
        imagem: "https://uploads.jovemnerd.com.br/wp-content/uploads/2025/03/imagem_2025_03_01_102908427__u63ctq3r-760x1075.png",
        imagemModal: "https://a.storyblok.com/f/178900/960x540/6e6bcda041/demon-slayer.jpg/m/filters:quality(95)format(webp)",
        diretor: "Haruo Sotozaki",
        atores: "Natsuki Hanae, Akari Kitō, Hiro Shimono",
        episodios: "3 temporadas + filme",
        premios: "https://www.imdb.com/title/tt9335498/awards",
        trailer: "https://www.youtube.com/watch?v=VQGCKyvzIM4"
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
      document.getElementById("modal-episodios").textContent = filme.episodios;
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
      gerarFilmes("section:nth-of-type(3)", filmesComedia);
      gerarFilmes("section:nth-of-type(4)", filmesDrama);
      gerarFilmes("section:nth-of-type(5)", filmesAnime);

    });
  </script>
</body>

</html>