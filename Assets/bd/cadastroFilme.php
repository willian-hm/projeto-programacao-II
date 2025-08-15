<?php
require_once "filmeDAO.php";

filmeDAO::cadastrarFilme($_GET);

header("location: ../../cineverse.php");