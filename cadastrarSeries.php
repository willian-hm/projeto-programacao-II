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
            <a href="cineverse.php" class="logo">🎬 Cineverse</a>
            <div class="links">
                <a href="filmes.php">Filmes</a>
                <a href="series.php">Séries</a>
            </div>
            <div class="usuario">
                <div class="icone-usuario" onclick="toggleMenu()">
                    <span>👤</span>
                </div>
                <div class="menu-suspenso" id="menuSuspenso">
                    <a href="perfil.php">Perfil</a>
                    <a href="cadastrarFilmes.php">Cadastrar Filmes</a>
                    <a href="cadastrarSeries.php">Cadastrar Séries</a>
                    <a href="config.php">Configurações</a>
                    <a href="index.php">Encerrar sessão</a>
                </div>
            </div>
        </nav>
    </header>

    <form action="">

    </form>


    <footer>&copy; 2025 Cineverse. Todos os direitos reservados.</footer>

    <script>
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