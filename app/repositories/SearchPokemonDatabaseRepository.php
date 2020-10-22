<?php
require_once("DataSource.php");

function search($nombre, $id, $tipo)
{
    $query = "select * from pokemon";
    if ($nombre != null && $nombre != "") {
        $query .= stristr($query, "where") ? "" : " where nombre like '%" . $nombre . "%'";
    }
    if ($id != null && $id != "") {
        $query .= stristr($query, "where") ? " and id ='" . $id . "'" : " where id = '" . $id . "'";
    }
    if ($tipo != null && $tipo != "") {
        $query .= stristr($query, "where") ? " and tipo ='" . $tipo . "'" : " where tipo = '" . $tipo . "'";
    }
    $query .= ";";
    $con = new DataSource();
    $result = $con->get($query);
    if ($result == null) {
        header("Location: ../Error.html");
    }
    return $result;
}