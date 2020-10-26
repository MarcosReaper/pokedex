<?php
require_once("DataSource.php");

function removePokemon($id){
    $query = "DELETE FROM pokedexCervera.pokemon WHERE id=".$id.";";
    $con = new DataSource();
    $result = $con->remove($query);
    if ($result == null) {
        header("Location: ../Error.html");
    }
    return $result;
}