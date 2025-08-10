<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Cineverse - Cadastro</title>
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
      <h2>Criar Conta</h2>
      <form action="Assets/bd/cadastroUsuario.php">
        <input type="text" id="nome" placeholder="Nome completo">
        <input type="email" id="email" placeholder="E-mail">
        <input type="password" id="senha" placeholder="Senha">
        <input type="submit" value="Cadastrar">
      </form>

      <button onclick="window.location.href='index.php'" style="margin-top: 10px; background-color: #333;">
        Já tenho uma conta
      </button>

      <p id="mensagemCadastro"></p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Cineverse. Todos os direitos reservados.</p>
  </footer>

  <script>
    function fazerCadastro() {
      const nome = document.getElementById("nome").value;
      const email = document.getElementById("email").value;
      const senha = document.getElementById("senha").value;
      const confirmarSenha = document.getElementById("confirmarSenha").value;
      const mensagem = document.getElementById("mensagemCadastro");

      if (!nome || !email || !senha || !confirmarSenha) {
        mensagem.style.color = "#ffcccc";
        mensagem.textContent = "Por favor, preencha todos os campos.";
        return;
      }

      if (senha !== confirmarSenha) {
        mensagem.style.color = "#ffcccc";
        mensagem.textContent = "As senhas não coincidem.";
        return;
      }

      mensagem.style.color = "lightgreen";
      mensagem.textContent = "Cadastro realizado com sucesso!";

      setTimeout(() => {
        window.location.href = "cineverse.php";
      }, 1000);
    }
  </script>
</body>

</html>