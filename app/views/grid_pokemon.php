<?php
require ("util/functions.php");

define("ROL", 1);
function grilla($resultSet, $rol)
{
    if ($resultSet != null) {
        $element = pokemonTypeElementsTranslate();
        echo "<div class='w3-row-padding'>";
        for ($i = 0; $i < sizeof($resultSet); $i++) {
            echo " <div class='w3-third w3-container w3-margin-bottom'>";
            echo "<img src='".$resultSet[$i]["url"]."' alt='".$resultSet[$i]['nombre']."' class='w3-hover-opacity w3-block'>";
            echo "<div class='w3-container w3-white w3-block'>";
            echo "<p><b>".$resultSet[$i]['nombre']."</b>
                  <img src='".$element[$i + 1]."' class='w3-hover-opacity w3-block' style='max-width: 2em'></p>";
            echo "<p>".$resultSet[$i]['descripcion']."</p>";
            if($rol == ROL){
                echo "<p><b>Estoy probando el rol</b></p>";
            }
            echo "</div></div>";
        }
        echo "</div>";
    }else{
        echo "<div class='w3-container w3-card-4 w3 w3-half w3-center w3-light-grey w3-display-middle'>";
        echo "<p><b>Sin Resultados</b></p>";
        echo "</div>";
    }
}
?>

