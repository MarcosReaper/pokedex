<?php
require("util/functions.php");
require("addPokemon.php");
session_start();
define("ROL", 1);
function grilla($resultSet, $rol)
{
    if ($resultSet != null) {
        $_SESSION["detail"] = $resultSet;
        $element = pokemonTypeElementsTranslate();
        echo "<div class='w3-row-padding' >";
        for ($i = 0; $i < sizeof($resultSet); $i++) {
            $id=$resultSet[$i]['id'];
            echo " <div class='w3-third w3-container w3-margin-bottom' >";
            echo " <div class='w3-card w3-gray'>";
            echo "<form action='/views/detailPokemon.php' method='get'>";
            echo "<input type='hidden' value='".$id."' name='id'>";
            echo "<input type='image' src='" . $resultSet[$i]["url"] . "' alt='" . $resultSet[$i]['nombre'] . "' class='w3-hover-opacity w3-block'>";
            echo "</form>";
            echo "<div class='w3-container w3-white'>";
            echo "<p><b>" . $resultSet[$i]['nombre'] . "</b>
                  <img src='" . $element[$resultSet[$i]['tipo']] . "' class='w3-hover-opacity w3-block' style='max-width: 2em'></p>";
            echo "<p>" . $resultSet[$i]['descripcion'] . "</p>";
            if ($rol == ROL) {
                echo " <div class='w3-row-padding'>";
                echo "<img src='../images/close.png' class='w3-hover-opacity' style='max-width: 2em; margin-right: 1em;
                        margin-bottom: 1em;' onclick=\"removePokemon(".$id.")\">";
                echo "<img src='../images/edit.png' class='w3-hover-opacity' style='max-width: 2em; margin-right: 1em;
                        margin-bottom: 1em;' onclick=\"editarPokemon(".$id.")\">";
                echo "</div>";
            }
            echo "</div></div>";
            echo "</div>";
        }
        if ($rol == ROL) {
            addPokemonView($rol);
        }
        echo "</div>";

    } else {
        echo "<div class='w3-container w3-card-4 w3 w3-half w3-center w3-light-grey w3-display-middle'>";
        echo "<p><b>Sin Resultados</b></p>";
        echo "</div>";
    }
}

?>

