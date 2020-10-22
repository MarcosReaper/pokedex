<?php
session_start();
require_once("../repositories/SearchPokemonDatabaseRepository.php");
$result = search($_POST["nombreABuscar"], null, null);
$_SESSION["grid"] = $result;
header("Location: ../busquedaPokemon.php");
?>
