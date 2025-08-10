<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Cineverse - Login</title>
  <link rel="stylesheet" href="Assets/css/style.css">
</head>

<body>
  <header>
    <nav class="header-content">
      <a href="cineverse.php" class="logo">🎬 Cineverse</a>
    </nav>
  </header>

  <main>
    <div class="login-container">
      <h2>Entrar</h2>
      <input type="text" id="nome" placeholder="Nome">
      <input type="password" id="senha" placeholder="Senha">
      <button onclick="fazerLogin()">Login</button>
      <p><a href="cadastro.php">Não tenho uma conta</a></p>
      <p id="mensagem"></p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Cineverse. Todos os direitos reservados.</p>
  </footer>

  <script>
    function fazerLogin() {
      const nome = document.getElementById("nome").value;
      const senha = document.getElementById("senha").value;
      const mensagem = document.getElementById("mensagem");

      if (nome === "usuario" && senha === "1234") {
        mensagem.style.color = "lightgreen";
        mensagem.textContent = "Login realizado com sucesso!";

        setTimeout(() => {
          window.location.href = "cineverse.html";
        }, 1000);
      } else {
        mensagem.style.color = "#ffcccc";
        mensagem.textContent = "Nome ou senha incorretos.";
      }


    }
  </script>
</body>

</html>