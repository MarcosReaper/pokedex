<?php
session_start();
require_once("../repositories/RemovePokemonDatabaseRepository.php");
removePokemon($_GET["remove"]);
header("Location: SearchPokemonController.php");
?>