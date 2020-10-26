<?php
require_once("DataSource.php");

function updatePokemon($id, $url, $nombre, $tipo, $descripcion)
{
    $query = "UPDATE pokemon SET url='".$url."', nombre='".$nombre."', tipo=".$tipo.", descripcion='".$descripcion."' WHERE id=".$id.";";
    $query .= ";";
    $con = new DataSource();
    $result = $con->update($query);
    if ($result == null) {
        header("Location: ../Error.html");
    }
    return $result;
}