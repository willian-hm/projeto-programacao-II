<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cineverse - Cadastrar Filme</title>
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

    <main>
        <div class="login-container">
            <h2>Cadastrar Filme</h2>
            <form action="Assets/bd/cadastrarFilme.php" method="POST" onsubmit="return validarCadastro(event)">
                <input type="text" name="idfilme" id="idfilme" placeholder="ID do Filme">
                <input type="text" name="titulo" id="titulo" placeholder="Título">
                <input type="number" name="ano" id="ano" placeholder="Ano">
                <input type="text" name="idcategoria" id="idcategoria" placeholder="ID da Categoria">
                <input type="text" name="idclassificacao" id="idclassificacao" placeholder="ID da Classificação">
                <input type="text" name="sinopse" id="sinopse" placeholder="Sinopse"></input>
                <p>cu</p>
                <input type="file" name="imagem" id="imagem" placeholder="Banner">
                <input type="file" name="imagemModal" id="imagemModal" placeholder="Imagem Modal">
                <input type="text" name="diretor" id="diretor" placeholder="Diretor">
                <input type="text" name="elenco" id="elenco" placeholder="Elenco">
                <input type="text" name="oscar" id="oscar" placeholder="Prêmios/Oscar">
                <input type="text" name="trailer" id="trailer" placeholder="Trailer">
                <input type="submit" value="Cadastrar Filme">
            </form>
            <p id="mensagemCadastro"></p>
        </div>
    </main>

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

        function validarCadastro(event) {
            event.preventDefault();
            const campos = [
                "idfilme", "titulo", "ano", "idcategoria", "idclassificacao",
                "sinopse", "imagem", "imagemModal", "diretor", "elenco", "oscar", "trailer"
            ];
            let valido = true;
            campos.forEach(campo => {
                if (!document.getElementById(campo).value.trim()) {
                    valido = false;
                }
            });

            const mensagem = document.getElementById("mensagemCadastro");
            if (!valido) {
                mensagem.style.color = "#ffcccc";
                mensagem.textContent = "Por favor, preencha todos os campos.";
                return false;
            }

            mensagem.style.color = "lightgreen";
            mensagem.textContent = "Filme cadastrado com sucesso!";
            setTimeout(() => {
                event.target.submit();
            }, 1000);
            return true;
        }
    </script>
</body>

</html>
