<?php
require_once "serieDAO.php";

serieDAO::cadastrarSerie($_GET);

header("location: ../../cineverse.php");