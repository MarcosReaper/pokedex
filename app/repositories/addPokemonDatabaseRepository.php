<?php
require_once("DataSource.php");

function addPokemon($url, $nombre, $tipo, $descripcion)
{
    $query = "insert into pokemon (url,nombre,tipo,descripcion) values ('".$url."', '".$nombre."',".$tipo.",'".$descripcion."');";
    $query .= ";";
    $con = new DataSource();
    $result = $con->save($query);
    if ($result == null) {
        header("Location: ../Error.html");
    }
    return $result;
}