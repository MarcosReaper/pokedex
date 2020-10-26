<?php
require_once('../repositories/addPokemonDatabaseRepository.php');
require_once('../repositories/UpdatePokemonDatabaseRepository.php');
session_start();
$url = $_SESSION["url"];
$nombre = $_SESSION["nombre"];
$tipo = $_SESSION["tipo"];
$desc = $_SESSION["desc"];
if ($url != null && $nombre != null && $tipo != null && $desc != null && $_SESSION["id"] == null) {
    addPokemon($url, $nombre, $tipo, $desc);
    header("Location: ../entrypoints/SearchPokemonController.php");
} else if ($url != null && $nombre != null && $tipo != null && $desc != null && $_SESSION["id"] != null) {
    updatePokemon($_SESSION["id"], $url, $nombre, $tipo, $desc);
    header("Location: ../entrypoints/SearchPokemonController.php");
}
else{
    header("Location: ../useCases/ErrorUseCase.php");
}