<?php
session_start();
require_once("../repositories/SearchPokemonDatabaseRepository.php");
$_SESSION["edit"] = $_GET["edit"];
$result = search(null, $_SESSION["edit"], null);
$_SESSION["edit"] = $result;
header("Location: ../formPokemon.php");
