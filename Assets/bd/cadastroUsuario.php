<?php
require_once "UsuarioDAO.php";

UsuarioDAO::cadastrar($_GET);

echo "<h1>Deu boa!</h1>";